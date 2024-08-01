<?php

namespace App\Filament\Resources\ExamPaperResource\Pages;

use App\Filament\Resources\ExamPaperResource;
use App\Models\Competency;
use App\Models\ExamPaper;
use App\Models\ExamQuestion;
use App\Models\Program;
use Filament\Actions;
use Filament\Forms\Components\Select;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function App\Filament\Resources\BusinessResource\Pages\generateAccNumber;

class ListExamPapers extends ListRecords
{
    protected static string $resource = ExamPaperResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make("Generate New Exam Paper")
                ->requiresConfirmation()
                ->modalHeading('Confirm Generation')
                ->modalDescription(function($record){
                    return 'You are about to generate a new Exam Paper. Confirm to proceed or cancel';
                })
                ->modalSubmitActionLabel('Yes, Confirm')
                ->form([
                    Select::make('program_id')
                        ->label('Choose Exam Program')
                        ->required()
                        ->options(Program::all()->pluck('name','id')->toArray())
                ])
                ->action(function($data){
                    $new_ref_number = $this->generateRefNumber();

                    // Get total count of questions
                    $totalQuestions = ExamQuestion::where('program_id', $data['program_id'])->count();

                    // Check if there are enough questions in the database
                    if ($totalQuestions < 15) {
                        // Handle case when there are not enough questions
                        //echo "Error: There are not enough questions in the database.";
                        return;
                    }

                    // Initialize an array to store selected question IDs
                    $selectedQuestionIds = [];

                    // Loop to select 15 unique question IDs
                    while (count($selectedQuestionIds) < 15) {
                        // Generate a random question ID
                        $randomQuestionId = rand(1, $totalQuestions);

                        // Check if the selected question ID is not already in the array
                        if (!in_array($randomQuestionId, $selectedQuestionIds)) {
                            // Add the unique question ID to the array
                            $selectedQuestionIds[] = $randomQuestionId;
                        }
                    }

                    // Loop to insert selected questions into the ExamPaper table
                    foreach ($selectedQuestionIds as $questionId) {
                        // Retrieve the question from the ExamQuestions table
                        $question = ExamQuestion::find($questionId);

                        // Create a new ExamPaper record and populate its fields
                        $examPaper = new ExamPaper();
                        $examPaper->ref_number = $new_ref_number;
                        $examPaper->exam_category_id = $question->exam_category_id;
                        $examPaper->year = $question->year;
                        $examPaper->month = $question->month;
                        $examPaper->image = $question->image;
                        $examPaper->question = $question->question;
                        $examPaper->option_a = $question->option_a;
                        $examPaper->option_b = $question->option_b;
                        $examPaper->option_c = $question->option_c;
                        $examPaper->option_d = $question->option_d;
                        $examPaper->correct_answer = $question->correct_answer;
                        $examPaper->user_id = Auth::user()->id;

                        // Save the ExamPaper record
                        $examPaper->save();
                    }

                    Notification::make()
                        ->success()
                        ->title('Paper Generated')
                        ->body('Exam Paper Generated Successfully');

                    //echo "Exam paper generated successfully with 15 unique questions.";

                    $this->redirect("exam-papers");

                })

        ];
    }

    function generateRefNumber()
    {
        $prefix = 'HPCZ'; // Prefix for the account number
        $suffix = time(); // Suffix for the account number (UNIX timestamp)

        // Generate a random number between 1000 and 9999
        $random = rand(1000000000, 9999999999);

        // Combine the prefix, random number, and suffix to form the account number
        $ref_number = $prefix . $random;

        // Check if the payment reference number already exists in the database
        if (DB::table('exam_papers')->where('ref_number',$ref_number)->exists()) {
            // If the payment reference number already exists, generate a new one recursively
            return generateRefNumber();
        }
        return $ref_number;
    }
}

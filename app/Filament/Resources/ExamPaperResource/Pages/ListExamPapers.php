<?php

namespace App\Filament\Resources\ExamPaperResource\Pages;

use App\Filament\Resources\ExamPaperResource;
use App\Models\AuditTrail;
use App\Models\Competency;
use App\Models\ExamPaper;
use App\Models\ExamQuestion;
use App\Models\ExamTotalQuestion;
use App\Models\Program;
use Filament\Actions;
use Filament\Forms\Components\DateTimePicker;
use Filament\Forms\Components\Select;
use Filament\Notifications\Notification;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
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
                ->modalDescription(function ($record) {
                    return 'You are about to generate a new Exam Paper. Confirm to proceed or cancel';
                })
                ->modalSubmitActionLabel('Yes, Confirm')
                ->form([
                    Select::make('program_id')
                        ->label('Choose Exam Program')
                        ->required()
                        ->options(Program::all()->pluck('name', 'id')->toArray()),
                    DateTimePicker::make("exam_sitting_date")

                ])
                ->action(function ($data) {
                    $new_ref_number = $this->generateRefNumber();

                    Log::info("Ref Number is ".$new_ref_number." and Program ID is ".$data['program_id']);

                    // Get total count of questions
                    $totalProgramQuestions = ExamQuestion::where('program_id', $data['program_id'])->count();

                    // $totalExamPaperQuestions = ExamTotalQuestion::where("name", "default")->first()->total_questions;
                     // Explicitly set the total number of questions to generate to 150
                    $totalExamPaperQuestions = 150;

                    Log::info("The Exam questions ".$totalProgramQuestions ." and Total Exam Questions ".$totalExamPaperQuestions);

                    // Check if there are enough questions in the database
                    if ($totalProgramQuestions < $totalExamPaperQuestions) {
                        // Handle case when there are not enough questions
                        //echo "Error: There are not enough questions in the database.";
                        Log::info("The Exam questions ".$totalProgramQuestions ." is less than the intended ".$totalExamPaperQuestions);
                        return;
                    }

                    // Initialize an array to store selected question IDs
                    $selectedQuestionIds = [];

                    //get program competences
                    $program_competences = Competency::where("program_id", $data['program_id'])->get();

                    Log::info("Program Competences",["data",json_encode($program_competences)]);

                    foreach ($program_competences as $program_competence) {
                        //total question count per competency

                        // Step 2: Convert to a float
                        $percentageValue = floatval($program_competence->weight);

                        // Step 3: Divide by 100 to get the decimal value
                        $percentageDecimal = $percentageValue / 150;
                        $total_competence_questions = $percentageDecimal * $totalExamPaperQuestions;

                        Log::info("Total Competence_questions => " . $total_competence_questions);

                        // Loop to select unique question IDs per competency
                        while (count($selectedQuestionIds) < $total_competence_questions) {
                            // Generate a random question ID
                            $randomQuestionId = rand(1, $total_competence_questions);

                            // Check if the selected question ID is not already in the array
                            if (!in_array($randomQuestionId, $selectedQuestionIds)) {
                                // Add the unique question ID to the array
                                $selectedQuestionIds[] = $randomQuestionId;
                            }
                        }
                    }


                    // Loop to insert selected questions into the ExamPaper table
                    foreach ($selectedQuestionIds as $questionId) {
                        // Retrieve the question from the ExamQuestions table
                        $question = ExamQuestion::find($questionId);

                        // Create a new ExamPaper record and populate its fields
                        $examPaper = new ExamPaper();
                        $examPaper->ref_number = $new_ref_number;
                        $examPaper->exam_sitting_date = $data["exam_sitting_date"];
                        $examPaper->program_id = $question->program_id;
                        $examPaper->competency_id = $question->competency_id;
                        $examPaper->year = $question->year;
                        $examPaper->month = $question->month;
                        $examPaper->image = $question->image;
                        $examPaper->question = $question->question;
                        $examPaper->option_a = $question->option_a;
                        $examPaper->option_b = $question->option_b;
                        $examPaper->option_c = $question->option_c;
                        $examPaper->option_d = $question->option_d;
                        $examPaper->option_e = $question->option_e;
                        $examPaper->correct_answer = $question->correct_answer;
                        $examPaper->user_id = Auth::user()->id;

                        // Save the ExamPaper record
                        $examPaper->save();
                    }

                    Notification::make()
                        ->success()
                        ->title('Exam Paper ' . $new_ref_number)
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
        if (DB::table('exam_papers')->where('ref_number', $ref_number)->exists()) {
            // If the payment reference number already exists, generate a new one recursively
            return $this->generateRefNumber();
        }
        return $ref_number;
    }

    public function mount(): void
    {
        $user = Auth::user();
        //abort_unless(checkCreateBankNamesPermission(),403);

        $activity = AuditTrail::create([
            "user_id" => $user->id,
            "module" => "Exam Paper",
            "activity" => "Viewed  Page",
            "ip_address" => request()->ip()
        ]);

        $activity->save();
    }
}

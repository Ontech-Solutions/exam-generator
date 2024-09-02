<?php

namespace App\Filament\Resources\ExamPaperResource\Pages;

use App\Filament\Resources\ExamPaperResource;
use App\Models\AuditTrail;
use App\Models\Competency;
use App\Models\ExamPaper;
use App\Models\ExamQuestion;
use App\Models\ExamTotalQuestion;
use App\Models\Program;
use App\Models\Province;
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
                /*->action(function ($data){
                    // Get all provinces
                    $provinces = Province::all();

                    foreach ($provinces as $province) {
                        try {
                            // Generate the reference number with the province code
                            $new_ref_number = $this->generateRefNumber($province->code);
                            Log::info("Generating exam paper with Ref Number " . $new_ref_number . " for Province " . $province->name);

                            // Fetch the selected questions
                            $selectedQuestionIds = $this->selectQuestions($data['program_id']);

                            if (count($selectedQuestionIds) < 150) {
                                throw new \Exception("Less than 150 questions selected for Province " . $province->name);
                            }

                            // Insert selected questions into the ExamPaper table
                            $this->saveExamPaper($selectedQuestionIds, $new_ref_number, $data, $province->id);
                            Log::info("Exam Paper Generated Successfully for Province " . $province->name);

                        } catch (\Exception $e) {
                            Log::error($e->getMessage());
                            Notification::make()
                                ->danger()
                                ->title('Exam Paper Generation Failed')
                                ->body('Failed to generate exam paper for Province ' . $province->name . ': ' . $e->getMessage());
                        }
                    }

                    Notification::make()
                        ->success()
                        ->title('Exam Papers')
                        ->body('Exam Papers Generated Successfully for all Provinces');
                })*/
                ->action(function ($data) {
                        // Generate the reference number with the province code
                        $new_ref_number = $this->generateRefNumber();



                        // Get total count of questions for the program
                        $totalProgramQuestions = ExamQuestion::where('program_id', $data['program_id'])->count();

                        // Explicitly set the total number of questions to generate to 150
                        $totalExamPaperQuestions = 150;

                        // Check if there are enough questions in the database
                        if ($totalProgramQuestions < $totalExamPaperQuestions) {
                            Log::info("The Exam questions " . $totalProgramQuestions . " is less than the intended " . $totalExamPaperQuestions . " for Province " . 1);
                            // Skip to the next province if not enough questions
                        }

                        // Initialize an array to store selected question IDs
                        $selectedQuestionIds = [];

                        // Get program competencies
                        $program_competences = Competency::where("program_id", $data['program_id'])->get();

                        Log::info("Program Competences", ["data", json_encode($program_competences)]);

                        foreach ($program_competences as $program_competence) {
                            // Convert the weight to a decimal
                            $percentageDecimal = floatval($program_competence->weight) / 100;

                            // Calculate the number of questions for this competency
                            $total_competence_questions = ceil($percentageDecimal * $totalExamPaperQuestions);

                            Log::info("Total Competence_questions => " . $total_competence_questions);

                            // Fetch the questions from the database for this competency
                            $questions = ExamQuestion::where('competency_id', $program_competence->id)
                                ->where('program_id', $data['program_id'])
                                ->inRandomOrder()
                                ->take($total_competence_questions)
                                ->pluck('id')
                                ->toArray();

                            // Merge the fetched question IDs into the selected question IDs array, ensuring uniqueness
                            $selectedQuestionIds = array_merge($selectedQuestionIds, array_diff($questions, $selectedQuestionIds));
                        }

                        // Ensure that exactly 150 questions are selected
                        $selectedQuestionIds = array_slice($selectedQuestionIds, 0, $totalExamPaperQuestions);

                    if (count($selectedQuestionIds) < $totalExamPaperQuestions) {
                        $remainingQuestions = ExamQuestion::where('program_id', $data['program_id'])
                            ->whereNotIn('id', $selectedQuestionIds)
                            ->inRandomOrder()
                            ->take($totalExamPaperQuestions - count($selectedQuestionIds))
                            ->pluck('id')
                            ->toArray();

                        $selectedQuestionIds = array_merge($selectedQuestionIds, $remainingQuestions);
                    }

                        Log::info("Success: Correct number of questions selected for Province " . $province->name);

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
                            $examPaper->province_id = 1; // Store the province ID with the exam paper

                            // Save the ExamPaper record
                            $examPaper->save();
                        }


                    Notification::make()
                        ->success()
                        ->title('Exam Papers')
                        ->body('Exam Papers Generated Successfully for all Provinces');

                    $this->redirect("exam-papers");
                })



        ];
    }

    private function selectQuestions($program_id) {
        $totalExamPaperQuestions = 150;
        $selectedQuestionIds = [];

        $program_competences = Competency::where("program_id", $program_id)->get();

        foreach ($program_competences as $program_competence) {
            $percentageDecimal = floatval($program_competence->weight) / 100;
            $total_competence_questions = ceil($percentageDecimal * $totalExamPaperQuestions);

            $questions = ExamQuestion::where('competency_id', $program_competence->id)
                ->where('program_id', $program_id)
                ->inRandomOrder()
                ->take($total_competence_questions)
                ->pluck('id')
                ->toArray();

            $selectedQuestionIds = array_merge($selectedQuestionIds, array_diff($questions, $selectedQuestionIds));
        }

        // Ensure exactly 150 questions
        return array_slice($selectedQuestionIds, 0, $totalExamPaperQuestions);
    }

    private function saveExamPaper($selectedQuestionIds, $ref_number, $data, $province_id) {
        foreach ($selectedQuestionIds as $questionId) {
            $question = ExamQuestion::find($questionId);

            $examPaper = new ExamPaper();
            $examPaper->ref_number = $ref_number;
            $examPaper->exam_sitting_date = $data["exam_sitting_date"];
            $examPaper->program_id = $data["program_id"];
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
            $examPaper->province_id = $province_id;
            $examPaper->save();
        }
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

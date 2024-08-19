<?php

namespace App\Filament\Resources\ExamQuestionResource\Pages;

use App\Filament\Imports\ExamQuestionImporter;
use App\Filament\Resources\ExamQuestionResource;
use App\Models\AuditTrail;
use Filament\Actions;
use Filament\Actions\ImportAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class ListExamQuestions extends ListRecords
{
    protected static string $resource = ExamQuestionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ImportAction::make()
                ->importer(ExamQuestionImporter::class)
                ->color("success"),
            Actions\CreateAction::make(),
        ];
    }

    public function mount(): void
    {
        $user = Auth::user();
        //abort_unless(checkCreateBankNamesPermission(),403);

        $activity = AuditTrail::create([
            "user_id" => $user->id,
            "module" => "Exam Questions",
            "activity" => "Viewed Exam Questions Page",
            "ip_address" => request()->ip()
        ]);

        $activity->save();
    }
}

<?php

namespace App\Filament\Resources\ExamPaperMarkingKeyResource\Pages;

use App\Filament\Resources\ExamPaperMarkingKeyResource;
use App\Models\AuditTrail;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

class ListExamPaperMarkingKeys extends ListRecords
{
    protected static string $resource = ExamPaperMarkingKeyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function mount(): void
    {
        $user = Auth::user();
        //abort_unless(checkCreateBankNamesPermission(),403);

        $activity = AuditTrail::create([
            "user_id" => $user->id,
            "module" => "Exam paper marking key",
            "activity" => "Viewed Exam paper marking key Page",
            "ip_address" => request()->ip()
        ]);

        $activity->save();
    }
}

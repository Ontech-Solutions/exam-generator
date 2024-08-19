<?php

namespace App\Filament\Resources\ExamPaperResource\Pages;

use App\Filament\Resources\ExamPaperResource;
use App\Models\AuditTrail;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateExamPaper extends CreateRecord
{
    protected static string $resource = ExamPaperResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function afterCreate()
    {
         //log user activity
         $activity = AuditTrail::create([
            "user_id" => Auth::user()->id,
            "module" => "Exam Paper",
            "activity" => "Generated Exam paper with ID ".$this->record->id,
            "ip_address" => request()->ip()
        ]);

        $activity->save();
    }
}

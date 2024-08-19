<?php

namespace App\Filament\Resources\ExamPaperMarkingKeyResource\Pages;

use App\Filament\Resources\ExamPaperMarkingKeyResource;
use App\Models\AuditTrail;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateExamPaperMarkingKey extends CreateRecord
{
    protected static string $resource = ExamPaperMarkingKeyResource::class;

    protected function afterCreate()
    {
         
        //log user activity
         $activity = AuditTrail::create([
            "user_id" => Auth::user()->id,
            "module" => "ExamPaperMarkingKey",
            "activity" => "Created Exam Paper Marking Key record with ID ".$this->record->id,
            "ip_address" => request()->ip()
        ]);

        $activity->save();
    }
}

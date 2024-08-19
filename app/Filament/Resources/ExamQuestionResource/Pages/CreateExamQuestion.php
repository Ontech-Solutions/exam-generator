<?php

namespace App\Filament\Resources\ExamQuestionResource\Pages;

use App\Filament\Resources\ExamQuestionResource;
use App\Models\AuditTrail;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateExamQuestion extends CreateRecord
{
    protected static string $resource = ExamQuestionResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function mutateFormDataBeforeCreate(array $data): array
    {
        $user_id = Auth::user()->id;
        $data['user_id'] = $user_id;
        return $data;
    }

    protected function afterCreate()
    {
         //log user activity
         $activity = AuditTrail::create([
            "user_id" => Auth::user()->id,
            "module" => "Competency",
            "activity" => "Created Competency record with ID ".$this->record->id,
            "ip_address" => request()->ip()
        ]);

        $activity->save();
    }
}

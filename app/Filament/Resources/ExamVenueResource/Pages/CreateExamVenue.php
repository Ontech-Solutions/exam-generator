<?php

namespace App\Filament\Resources\ExamVenueResource\Pages;

use App\Filament\Resources\ExamVenueResource;
use App\Models\AuditTrail;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateExamVenue extends CreateRecord
{
    protected static string $resource = ExamVenueResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    protected function afterCreate()
    {
         //log user activity
         $activity = AuditTrail::create([
            "user_id" => Auth::user()->id,
            "module" => "Exam Venue",
            "activity" => "Created Exam Venue with record ID ".$this->record->id,
            "ip_address" => request()->ip()
        ]);

        $activity->save();
    }
}

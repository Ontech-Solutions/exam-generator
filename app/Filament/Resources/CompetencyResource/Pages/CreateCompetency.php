<?php

namespace App\Filament\Resources\CompetencyResource\Pages;

use App\Filament\Resources\CompetencyResource;
use App\Models\AuditTrail;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

class CreateCompetency extends CreateRecord
{
    protected static string $resource = CompetencyResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
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

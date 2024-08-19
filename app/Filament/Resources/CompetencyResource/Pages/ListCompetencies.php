<?php

namespace App\Filament\Resources\CompetencyResource\Pages;

use App\Filament\Resources\CompetencyResource;
use App\Models\AuditTrail;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

class ListCompetencies extends ListRecords
{
    protected static string $resource = CompetencyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
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

    public function mount(): void
    {
        $user = Auth::user();
        //abort_unless(checkCreateBankNamesPermission(),403);

        $activity = AuditTrail::create([
            "user_id" => $user->id,
            "module" => "Bank Names",
            "activity" => "Viewed Create Bank Names Page",
            "ip_address" => request()->ip()
        ]);

        $activity->save();
    }
}

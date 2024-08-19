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

    public function mount(): void
    {
        $user = Auth::user();
        //abort_unless(checkCreateCompetencyPermission(),403);

        $activity = AuditTrail::create([
            "user_id" => $user->id,
            "module" => "Bank Names",
            "activity" => "Viewed Competency Page",
            "ip_address" => request()->ip()
        ]);

        $activity->save();
    }
}

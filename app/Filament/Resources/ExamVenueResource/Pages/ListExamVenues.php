<?php

namespace App\Filament\Resources\ExamVenueResource\Pages;

use App\Filament\Resources\ExamVenueResource;
use App\Models\AuditTrail;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

class ListExamVenues extends ListRecords
{
    protected static string $resource = ExamVenueResource::class;

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
            "module" => "Exam Venues",
            "activity" => "Viewed Exam Venue's Page",
            "ip_address" => request()->ip()
        ]);

        $activity->save();
    }
}

<?php

namespace App\Filament\Resources\RoleResource\Pages;

use App\Filament\Resources\RoleResource;
use App\Models\AuditTrail;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

class ListRoles extends ListRecords
{
    protected static string $resource = RoleResource::class;

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
            "module" =>"Roles",
            "activity" => "Viewed Roles Page",
            "ip_address" => request()->ip()
        ]);

        $activity->save();
    }
}

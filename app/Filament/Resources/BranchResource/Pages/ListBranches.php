<?php

namespace App\Filament\Resources\BranchResource\Pages;

use App\Filament\Resources\BranchResource;
use App\Models\AuditTrail;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Facades\Auth;

use function App\Filament\Resources\checkReadBranchPermission;

class ListBranches extends ListRecords
{
    protected static string $resource = BranchResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }

    public function mount(): void
    {
        $user = Auth::user();
        abort_unless(checkReadBranchPermission(),403);

        $activity = AuditTrail::create([
            "user_id" => $user->id,
            "module" => "User",
            "activity" => "Viewed List of Branches Page",
            "ip_address" => request()->ip()
        ]);

        $activity->save();
    }
}

<?php

namespace App\Filament\Resources\BranchResource\Pages;

use App\Filament\Resources\BranchResource;
use App\Models\AuditTrail;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;

use function App\Filament\Resources\checkReadBranchPermission;

class CreateBranch extends CreateRecord
{
    protected static string $resource = BranchResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }

    // public function mount(): void
    // {
    //     $user = Auth::user();
    //     abort_unless(checkReadBranchPermission(),403);

    //     $activity = AuditTrail::create([
    //         "user_id" => $user->id,
    //         "module" => "User",
    //         "activity" => "Created Branch ID:".$this->record,
    //         "ip_address" => request()->ip()
    //     ]);

    //     $activity->save();
    // }

    protected function afterCreate()
    {
         //log user activity
         $activity = AuditTrail::create([
            "user_id" => Auth::user()->id,
            "module" => "Branch",
            "activity" => "Created Branch record with ID ".$this->record->id,
            "ip_address" => request()->ip()
        ]);

        $activity->save();
    }
       


}

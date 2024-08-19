<?php

namespace App\Filament\Resources\UserResource\Pages;

use App\Filament\Resources\UserResource;
use App\Models\AuditTrail;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Support\Facades\Auth;
use function App\Filament\Resources\checkCreateUserPermission;

class CreateUser extends CreateRecord
{
    protected static string $resource = UserResource::class;

    // public function mount(): void
    // {
    //     $user = Auth::user();
    //     abort_unless(checkCreateUserPermission(),403);

    //     $activity = AuditTrail::create([
    //         "user_id" => $user->id,
    //         "module" => "User",
    //         "activity" => "Created Users with record ID ".$this->record->id,
    //         "ip_address" => request()->ip()
    //     ]);

    //     $activity->save();
    // }

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
            "module" => "User",
            "activity" => "Created User record with ID ".$this->record->id,   
            "ip_address" => request()->ip()
        ]);

        $activity->save();

    }
}

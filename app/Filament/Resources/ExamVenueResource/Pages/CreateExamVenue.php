<?php

namespace App\Filament\Resources\ExamVenueResource\Pages;

use App\Filament\Resources\ExamVenueResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateExamVenue extends CreateRecord
{
    protected static string $resource = ExamVenueResource::class;

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

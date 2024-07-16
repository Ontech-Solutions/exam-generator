<?php

namespace App\Filament\Resources\ExamVenueResource\Pages;

use App\Filament\Resources\ExamVenueResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamVenues extends ListRecords
{
    protected static string $resource = ExamVenueResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

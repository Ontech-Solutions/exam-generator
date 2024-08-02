<?php

namespace App\Filament\Resources\ExamPaperMarkingKeyResource\Pages;

use App\Filament\Resources\ExamPaperMarkingKeyResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListExamPaperMarkingKeys extends ListRecords
{
    protected static string $resource = ExamPaperMarkingKeyResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}

<?php

namespace App\Filament\Resources\ExamQuestionResource\Pages;

use App\Filament\Imports\ExamQuestionImporter;
use App\Filament\Resources\ExamQuestionResource;
use Filament\Actions;
use Filament\Actions\ImportAction;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Support\Collection;

class ListExamQuestions extends ListRecords
{
    protected static string $resource = ExamQuestionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            ImportAction::make()
                ->importer(ExamQuestionImporter::class)
                ->color("success"),
            Actions\CreateAction::make(),
        ];
    }
}

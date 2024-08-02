<?php

namespace App\Filament\Resources\ExamPaperMarkingKeyResource\Pages;

use App\Filament\Resources\ExamPaperMarkingKeyResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamPaperMarkingKey extends EditRecord
{
    protected static string $resource = ExamPaperMarkingKeyResource::class;

protected static ?string $title = 'Exam Paper Marking Key Details';

    protected function getHeaderActions(): array
    {
        return [
            //Actions\DeleteAction::make(),
        ];
    }

    protected function getFormActions(): array
    {
        return [

        ];
    }
}

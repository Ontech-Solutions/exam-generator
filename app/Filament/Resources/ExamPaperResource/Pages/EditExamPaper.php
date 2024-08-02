<?php

namespace App\Filament\Resources\ExamPaperResource\Pages;

use App\Filament\Resources\ExamPaperResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditExamPaper extends EditRecord
{
    protected static string $resource = ExamPaperResource::class;

    protected static ?string $title = 'Exam Paper Details';

    protected function getHeaderActions(): array
    {
        return [
            Actions\Action::make("Download PDF")
                ->label("Download PDF")
                ->color('success')
                ->action(function($record){
                    return redirect('/pdf/'.$record->ref_number);
                })
        ];
    }

    protected function getFormActions(): array
    {
        return [

        ];
    }

}

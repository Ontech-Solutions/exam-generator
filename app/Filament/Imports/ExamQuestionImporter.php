<?php

namespace App\Filament\Imports;

use App\Models\ExamQuestion;
use Filament\Actions\Imports\ImportColumn;
use Filament\Actions\Imports\Importer;
use Filament\Actions\Imports\Models\Import;
use Illuminate\Support\Facades\Auth;

class ExamQuestionImporter extends Importer
{
    protected static ?string $model = ExamQuestion::class;

    public static function getColumns(): array
    {
        return [
            ImportColumn::make('program_id')
                ->requiredMapping()
                ->numeric()
                ->rules(['required', 'integer']),
            ImportColumn::make('competency')
                ->requiredMapping()
                //->numeric()
                ->rules(['required', 'string']),
            ImportColumn::make('year')
                //->requiredMapping()
                ->rules(['required']),
            ImportColumn::make('month')
                //->requiredMapping()
                ->rules(['required','string']),
            //ImportColumn::make('image'),
            ImportColumn::make('question')
                ->requiredMapping()
                ->rules(['required','string']),
            ImportColumn::make('option_a')
                ->requiredMapping()
                ->rules(['required','string']),
            ImportColumn::make('option_b')
                ->requiredMapping()
                ->rules(['required','string']),
            ImportColumn::make('option_c')
                ->requiredMapping()
                ->rules(['required','string']),
            ImportColumn::make('option_d')
                ->requiredMapping()
                ->rules(['required','string']),
            ImportColumn::make('option_e')
                ->requiredMapping()
                ->rules(['required','string'])
        ];
    }

    public function resolveRecord(): ?ExamQuestion
    {
        $record = ExamQuestion::firstOrNew([
             // Update existing records, matching them by `$this->data['column_name']`
             //'competency_id' => $this->data['competency_id'],
             'competency' => $this->data['competency'],
             'question' => $this->data['question'],
         ]);


        // Set the user_id programmatically
        $record->user_id = Auth::user()->id;
        $record->correct_answer = $this->data['correct_answer'];

        return $record;
    }

    public static function getCompletedNotificationBody(Import $import): string
    {
        $body = 'Your exam question import has completed and ' . number_format($import->successful_rows) . ' ' . str('row')->plural($import->successful_rows) . ' imported.';

        if ($failedRowsCount = $import->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to import.';
        }

        return $body;
    }
}

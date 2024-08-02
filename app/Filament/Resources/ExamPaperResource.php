<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamPaperResource\Pages;
use App\Filament\Resources\ExamPaperResource\RelationManagers;
use App\Models\ExamPaper;
use App\Models\ExamTotalQuestion;
use App\Models\Program;
use App\Models\User;
use Doctrine\DBAL\Schema\Column;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamPaperResource extends Resource
{
    protected static ?string $model = ExamPaper::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Generated Papers';

    protected static ?int $navigationSort = 1;

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        return $query->select('id', 'ref_number', 'program_id', 'year', 'month', 'image', 'question','exam_sitting_date', 'option_a', 'option_b','option_c','option_d','option_e','correct_answer', 'user_id','created_at','updated_at')
            ->groupBy('ref_number')
            ->orderBy('updated_at', 'desc');
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Placeholder::make('')
                    ->content(function (ExamPaper $record) {
                        $exam_questions = ExamPaper::where('ref_number', $record->ref_number)->get();
                        return view('exam-paper-view', compact('exam_questions'));
                    })
                    ->columnSpanFull()
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('ref_number')
                    ->searchable()->sortable(),
                Tables\Columns\TextColumn::make("program_id")
                    ->label("Program")
                    ->formatStateUsing(function ($record){
                        return Program::where('id', $record->program_id)->first()->name ?? "";
                    }),
                Tables\Columns\TextColumn::make('exam_sitting_date')
                    ->label("Sitting Date/Time")
                ->dateTime()
                    ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('user_id')
                    ->formatStateUsing(function ($state){
                        return User::where("id", $state)->first()->name ?? "";
                    })
                    ->label("Generated By")
                    ->searchable()->sortable(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Generated At')
                    ->dateTime()
            ])
            ->filters([

            ])
            ->actions([
                Tables\Actions\EditAction::make()->label("View"),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    //Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListExamPapers::route('/'),
            //'create' => Pages\CreateExamPaper::route('/create'),
            'edit' => Pages\EditExamPaper::route('/{record}/edit'),
        ];
    }
}

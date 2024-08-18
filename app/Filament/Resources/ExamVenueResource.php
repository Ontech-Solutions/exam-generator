<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamVenueResource\Pages;
use App\Filament\Resources\ExamVenueResource\RelationManagers;
use App\Models\ExamVenue;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ExamVenueResource extends Resource
{
    protected static ?string $model = ExamVenue::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-library';

    protected static ?string $navigationGroup = 'System Settings';

    public static function shouldRegisterNavigation(): bool
    {
        return checkReadExamVenuePermission();
    }

    public static function form(Form $form): Form
    {
        return $form
        ->schema([
            Section::make('Fill Exam Venue Details')
                ->description('Enter the name of the Exam Venue')
                ->aside()
                ->schema([
                    Select::make('district')
                        ->label('District')
                        ->options([
                            "lusaka" => "Lusaka",
                            "ndola" => "Ndola",
                        ])
                        ->required(),
                    TextInput::make('center')->required(),

                ])
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('district')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('center')->sortable()->searchable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListExamVenues::route('/'),
            'create' => Pages\CreateExamVenue::route('/create'),
            'edit' => Pages\EditExamVenue::route('/{record}/edit'),
        ];
    }
}

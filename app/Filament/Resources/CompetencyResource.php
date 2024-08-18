<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompetencyResource\Pages;
use App\Filament\Resources\CompetencyResource\RelationManagers;
use App\Models\Competency;
use App\Models\Program;
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

class CompetencyResource extends Resource
{
    protected static ?string $model = Competency::class;

    protected static ?string $navigationIcon = 'heroicon-c-link';

    protected static ?string $navigationGroup = 'System Settings';

    public static function getEloquentQuery(): Builder
    {
        $query = parent::getEloquentQuery();

        if (auth()->user()->role_id == 1) {
            return $query->orderBy('created_at', 'desc');
        }
        return $query->orderBy('created_at', 'desc');
    }

    // public static function shouldRegisterNavigation(): bool
    // {
    //     return checkReadCompetencyPermission();
    // }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Fill Competency Details')
                    ->description('Enter the name of a Competency')
                    ->aside()
                    ->schema([
                        Select::make('program_id')
                            ->label('Program')
                            ->options(Program::all()->pluck('name', 'id'))
                            ->required(),
                        TextInput::make('name')->unique(ignoreRecord: true)->required(),
                        TextInput::make('weight')
                            ->required()
                            ->numeric()
                            ->postfix("%")
                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('program.name')->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('name')->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('weight')->sortable()
                    ->searchable(),

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
            'index' => Pages\ListCompetencies::route('/'),
            'create' => Pages\CreateCompetency::route('/create'),
            'edit' => Pages\EditCompetency::route('/{record}/edit'),
        ];
    }
}

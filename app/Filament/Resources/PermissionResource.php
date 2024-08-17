<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PermissionResource\Pages;
use App\Filament\Resources\PermissionResource\RelationManagers;
use App\Models\Permission;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class PermissionResource extends Resource
{
    protected static ?string $model = Permission::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';

    protected static ?string $navigationGroup = 'User Management';

    protected static ?int $navigationSort = 7;

    public static function shouldRegisterNavigation(): bool
    {
        return checkReadPermissionPermission();
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id'),
                Tables\Columns\TextColumn::make('role.name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('module')->sortable()->searchable(),
                Tables\Columns\ToggleColumn::make('create')->sortable()->searchable()
                    ->onColor('success')
                    ->offColor('danger'),
                Tables\Columns\ToggleColumn::make('read')->sortable()->searchable()
                    ->onColor('success')
                    ->offColor('danger'),
                Tables\Columns\ToggleColumn::make('update')->sortable()->searchable()
                    ->onColor('success')
                    ->offColor('danger'),
                Tables\Columns\ToggleColumn::make('delete')->sortable()->searchable()
                    ->onColor('success')
                    ->offColor('danger'),
            ])
            ->filters([
                SelectFilter::make('module')
                    ->label('Modules')
                    ->multiple()
                    ->options([
                        'Audit Trails' => 'Audit Trails',
                        'Branch' => 'Branch',
                        'Country' => 'Country',
                        'Nationality' => 'Nationality',
                        'Permission' => 'Permission',
                        'Role' => 'Role',
                    ]),
            ])
            ->actions([
                //Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    ExportBulkAction::make()
                    ->label('Download Permissions Report'),
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
            'index' => Pages\ListPermissions::route('/'),
            'create' => Pages\CreatePermission::route('/create'),
            //'edit' => Pages\EditPermission::route('/{record}/edit'),
        ];
    }
}

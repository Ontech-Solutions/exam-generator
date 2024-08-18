<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ExamQuestionResource\Pages;
use App\Filament\Resources\ExamQuestionResource\RelationManagers;
use App\Models\Competency;
use App\Models\ExamCategory;
use App\Models\ExamQuestion;
use App\Models\Program;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Filters\SelectFilter;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use pxlrbt\FilamentExcel\Actions\Tables\ExportBulkAction;

class ExamQuestionResource extends Resource
{
    protected static ?string $model = ExamQuestion::class;

    protected static ?string $navigationIcon = 'heroicon-c-question-mark-circle';

    protected static ?int $navigationSort = 2;

    protected static ?string $navigationGroup = 'System Settings';

    public static function getEloquentQuery(): Builder
    {
        // Check if there's an authenticated user
        $user = Auth::user();

        $query = parent::getEloquentQuery();

        if ($user && $user->role_id == 1) {
            // Customize the query as needed
            return $query->orderBy('created_at', 'desc');
        } else {
            return $query->where('user_id', $user->id)
                ->orderBy('created_at', 'desc');
        }

        // If it's not regulator_id 1 or no authenticated user, return an empty query
        return $query->where("user_id", -20);

    }

    // public static function shouldRegisterNavigation(): bool
    // {
    //     return checkReadExamQuestionPermission();
    // }


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Exam Question')
                    ->description('Create a new question')
                    ->aside()
                    ->schema([
                        Forms\Components\Grid::make(3)
                            ->schema([
                                Select::make('exam_category_id')
                                    ->label('Program')
                                    ->options(ExamCategory::all()->pluck('name', 'id')->toArray())
                                    ->reactive()
                                    ->required(),
                                Select::make('competency_id')
                                    ->label('Competency')
                                    ->options(function (callable $get) {
                                        $exam_category = ExamCategory::find($get('exam_category_id'));
                                        if (!$exam_category) {
                                            return Competency::all()->pluck('name', 'id');
                                        }
                                        return Competency::where('program_id', $exam_category->id)->pluck('name', 'id');
                                    })
                                    ->reactive()
                                    ->required(),

                            ]),
                        // Forms\Components\Grid::make(2)
                        //     ->schema([
                        //         TextInput::make('year')->required(),
                        //         Forms\Components\Select::make("month")
                        //             ->options([
                        //                 "January" => "January",
                        //                 "February" => "February",
                        //                 "March" => "March",
                        //                 "April" => "April",
                        //                 "May" => "May",
                        //                 "June" => "June",
                        //                 "July" => "July",
                        //                 "August" => "August",
                        //                 "September" => "September",
                        //                 "October" => "October",
                        //                 "November" => "November",
                        //                 "December" => "December"
                        //             ])
                        //         ->required()
                        //     ]),
                        Forms\Components\Textarea::make("question")
                            ->required(),
                        Forms\Components\Section::make('image')
                            ->schema([
                                FileUpload::make('image')
                                    ->label('')
                                    ->directory('question_image')
                                    ->openable()
                                    ->maxSize(5)
                                    ->storeFileNamesIn('question_image')
                                    ->maxSize(1024),
                            ]),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                TextInput::make('option_a')
                                    ->label("Option A")
                                    ->required(),
                                TextInput::make('option_b')
                                    ->label("Option B")
                                    ->required(),
                            ]),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                TextInput::make('option_c')
                                    ->label("Option C")
                                    ->required(),
                                TextInput::make('option_d')
                                    ->label("Option D")
                                    ->required(),
                            ]),
                        Forms\Components\Grid::make(2)
                            ->schema([
                                TextInput::make('option_e')
                                    ->label("Option E")
                                    ->required(),
                                    TextInput::make('correct_answer')
                                    ->label("Correct Answer")
                                    ->required(),
                            ]),


                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->defaultSort('id','desc')
            ->columns([
                Tables\Columns\TextColumn::make('id')->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('program_id')
                    ->label("Program")
                    ->formatStateUsing(function($state){
                        //return ExamCategory::where('id', $state)->first()->name  ?? "";
                        return Program::where('id', $state)->first()->name  ?? "";
                    })
                    ->wrap()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('competency_id')
                    ->label("Competency")
                    ->formatStateUsing(function($state){
                        return Competency::where('id', $state)->first()->name  ?? "";
                    })
                    ->wrap()
                    ->searchable()
                    ->sortable(),
                // Tables\Columns\TextColumn::make('year')
                //     ->description(function($record){
                //         return $record->month ?? "";
                //     }),
                Tables\Columns\TextColumn::make('question')
                    ->wrap()
                    ->searchable()
                    ->sortable(),
               
                Tables\Columns\TextColumn::make('option_a')
                    ->label("Option A")
                    ->wrap()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('option_b')
                    ->label("Option B")
                    ->wrap()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('option_c')
                    ->label("Option C")
                    ->wrap()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('option_d')
                    ->label("Option D")
                    ->wrap()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('option_e')
                    ->label("Option E")
                    ->wrap()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('correct_answer')
                    ->label("Correct Answer")
                    ->wrap()
                    ->hidden()
                    ->searchable()
                    ->sortable(),
                Tables\Columns\TextColumn::make('user_id')
                    ->sortable()
                    ->searchable()
                    ->wrap()
                    ->label("Recorded By")
                    ->formatStateUsing(function($state){
                        return User::where("id",$state)->first()->name ?? "";
                    }),
            ])
            ->filters([
                SelectFilter::make('program_id')
                    ->label("Program")
                    ->multiple()
                    ->options(Program::all()->pluck('name','id')->toArray()),
                    SelectFilter::make('user_id')
                    ->label("Recorded by")
                    ->multiple()
                    ->options(User::all()->pluck('name','id')->toArray()),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    // ExportBulkAction::make()
                    // ->label('Download Questions Report'),
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
            'index' => Pages\ListExamQuestions::route('/'),
            'create' => Pages\CreateExamQuestion::route('/create'),
            'edit' => Pages\EditExamQuestion::route('/{record}/edit'),
        ];
    }
}

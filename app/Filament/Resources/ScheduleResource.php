<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ScheduleResource\Pages;
use App\Filament\Resources\ScheduleResource\RelationManagers;
use App\Models\Schedule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\HasManyRepeater;
use Filament\Infolists;
use Filament\Infolists\Components\RepeatableEntry;
use Filament\Infolists\Infolist;
// use Filament\Infolists\Components\HasManyRepeater;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-list';

    protected static ?string $navigationGroup = 'Schedule Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required(),
                HasManyRepeater::make('workouts')
                    ->relationship('workouts')  // Link to workouts
                    ->schema([
                        TextInput::make('name')
                            ->label('Workout Name'),
                        HasManyRepeater::make('exercises')
                            ->relationship('exercises')  // Link to exercises
                            ->schema([
                                TextInput::make('name')->label('Exercise Name'),
                                TextInput::make('sets')->label('Sets'),
                                TextInput::make('reps')->label('Reps'),
                                TextInput::make('rest_time')->label('Rest Time (in seconds)'),
                            ]),
                    ]),
            ]);
    }
    //  info list to view the schedule records in a cstome way


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                // Tables\Columns\TextColumn::make('updated_at')
                //     ->dateTime(),
            ])

            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }


    // public static function infolist(Infolist $infolist): Infolist
    // {
    //     return $infolist
    //         ->schema([
    //         Infolists\Components\TextEntry::make('name')->label('Schedule Name'),

    //         RepeatableEntry::make('workouts')
    //             ->schema([
    //                 Infolists\Components\TextEntry::make('name'),
    //                 RepeatableEntry::make('exercises')

    //                     ->schema([
    //                         Infolists\Components\TextEntry::make('name'),
    //                         Infolists\Components\TextEntry::make('sets'),
    //                         Infolists\Components\TextEntry::make('reps'),
    //                         Infolists\Components\TextEntry::make('rest_time'),
    //                     ])->columns(4),
    //             ])->columns(1),


    //         ])->columns(1);
    // }

    // public static function infolist(Infolist $infolist): Infolist
    // {
    //     return $infolist
    //     ->schema([
    //         Infolists\Components\TextEntry::make('name')->label('Schedule Name'),

    //         RepeatableEntry::make('workouts')
    //         ->schema([
    //             Infolists\Components\TextEntry::make('name')->label('Workout Name'),

    //             RepeatableEntry::make('exercises')
    //                 ->schema([
    //                     Infolists\Components\Fieldset::make('Exercise Details')  // Adding the Fieldset
    //                         ->schema([
    //                             Infolists\Components\TextEntry::make('name')->label('Exercise Name'),
    //                             Infolists\Components\TextEntry::make('sets')->label('Sets'),
    //                             Infolists\Components\TextEntry::make('reps')->label('Reps'),
    //                             Infolists\Components\TextEntry::make('rest_time')->label('Rest Time (sec)'),
    //                         ])
    //                         ->columns(4),  // Set column layout for fields within the Fieldset
    //                 ])
    //                 ->columns(1),  // Columns for exercises
    //         ])
    //         ->columns(1),  // Columns for workouts
    //     ])
    //     ->columns(1);  // Columns for the main schema
    // }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                Infolists\Components\TextEntry::make('name')->label(''),

                RepeatableEntry::make('workouts')
                    ->schema([
                        Infolists\Components\TextEntry::make('name')->label(''),

                        // Grid layout to mimic a table header
                        Infolists\Components\Grid::make()
                            ->schema([
                                Infolists\Components\TextEntry::make('Exercise Name')->label('Exercise Name')->columnSpan(1),
                                Infolists\Components\TextEntry::make('Sets')->label('Sets')->columnSpan(1),
                                Infolists\Components\TextEntry::make('Reps')->label('Reps')->columnSpan(1),
                                Infolists\Components\TextEntry::make('Rest Time')->label('Rest Time (sec)')->columnSpan(1),
                            ])
                            ->columns([
                                'xs' => 1,
                                'sm' => 2,
                                'xl' => 4
                            ]), // Number of columns to create a header
                        // Add a responsive layout
                        // ->responsive([
                        //     'default' => 4,
                        //     'sm' => 2, // For small screens
                        //     'xs' => 1  // For extra small screens
                        // ]),

                        RepeatableEntry::make('exercises')
                            ->label('')
                            ->schema([
                                // Display the actual exercise data in the same column layout
                                Infolists\Components\Grid::make()
                                    ->schema([
                                        Infolists\Components\TextEntry::make('name')->label('')->columnSpan(1),  // Exercise Name
                                        Infolists\Components\TextEntry::make('sets')->label('')->columnSpan(1),   // Sets
                                        Infolists\Components\TextEntry::make('reps')->label('')->columnSpan(1),   // Reps
                                        Infolists\Components\TextEntry::make('rest_time')->label('')->columnSpan(1), // Rest Time
                                    ])
                                    ->columns([
                                        'xs' => 1,
                                        'sm' => 2,
                                        'xl' => 4
                                    ]),
                                // ->responsive([
                                //     'default' => 4,
                                //     'sm' => 2, // For small screens
                                //     'xs' => 1  // For extra small screens
                                // ]),


                            ])
                            ->columns(1)
                            ->contained(false),  // Remove the card around the exercises
                    ])
                    ->columns(1),
            ])
            ->columns(1);
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
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedule::route('/create'),
            'edit' => Pages\EditSchedule::route('/{record}/edit'),
            // 'view' => Pages\ViewSchedule::route('/{record}'),
        ];
    }
}
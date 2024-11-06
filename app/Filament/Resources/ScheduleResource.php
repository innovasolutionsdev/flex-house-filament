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
                ->placeholder('Beginner 1 day plan')
                ->required(),
            HasManyRepeater::make('workouts')
                ->relationship('workouts')  // Link to workouts
                ->schema([
                    TextInput::make('name')
                ->placeholder('Day 1 Upper Body')
                        ->label('Workout Name'),
                    HasManyRepeater::make('exercises')
                        ->relationship('exercises')  // Link to exercises
                        ->schema([
                            TextInput::make('name')->label('Exercise Name'),
                            TextInput::make('sets')->label('Sets'),
                            TextInput::make('reps')
                                ->label('Reps')
                                ->placeholder('12,10,8,6'),
                            TextInput::make('rest_time')->label('Rest Time (in seconds)'),
                        ]),
                ]),
            ]);
    }

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
                Tables\Actions\ViewAction::make()
                ->url(fn(Schedule $record) => route('schedules.show', $record->id)), // Redirect to the custom Blade view,
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
            'index' => Pages\ListSchedules::route('/'),
            'create' => Pages\CreateSchedule::route('/create'),
            'edit' => Pages\EditSchedule::route('/{record}/edit'),
        ];
    }
}
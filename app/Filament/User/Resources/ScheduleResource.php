<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\ScheduleResource\Pages;
use App\Filament\User\Resources\ScheduleResource\RelationManagers;
use App\Models\Schedule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\HasManyRepeater;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    //custome name for resource in navigation
    protected static ?string $pluralLabel = 'My fgbSchedules';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table


            ->columns([

                Tables\Columns\TextColumn::make('name')->label('Schedule Name'),
                Tables\Columns\TextColumn::make('created_at')->label('Assigned at')->date(),
                BadgeColumn::make('status')
                    ->label('Schedule status')
                    ->formatStateUsing(fn ($state) => match($state) {
                        'active' => 'Active',
                        'completed' => 'Completed',
                    })

                    ->color(fn ($state) => match($state) {
                        'active' => 'primary',
                        'completed' => 'success',
                    }),




            ])
            ->filters([
                //
            ])
            ->actions([
                // Tables\Actions\ViewAction::make(), // Add a view action to view schedule details
                Tables\Actions\ViewAction::make(),
                    // ->url(fn(Schedule $record) => route('schedules.show', $record->id)), // Redirect to the custom Blade view,
            ])
            ->bulkActions([])


        ;
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
            'view' => Pages\CustomSchedulePage::route('/{record}'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        // Return schedules where the logged-in user has a schedule assignment
        return parent::getEloquentQuery()
            ->whereHas('scheduleAssignments', function (Builder $query) {
                $query->where('user_id', Auth::id());
            });
    }

    public static function canCreate(): bool
    {
        return false; // Disable the creation of new membership payments
    }
}

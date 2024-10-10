<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\ScheduleResource\Pages;
use App\Filament\User\Resources\ScheduleResource\RelationManagers;
use App\Models\Schedule;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ScheduleResource extends Resource
{
    protected static ?string $model = Schedule::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

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

                Tables\Columns\TextColumn::make('name')->label('Schedule Name'),
            ])
            ->filters([
                //
            ])
            ->actions([Tables\Actions\ViewAction::make(), // Add a view action to view schedule details
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])

            // ->query(function (Builder $query) {
            //     // Fetch schedules assigned to the authenticated user
            //     return $query->whereHas('scheduleAssignments', function ($q) {
            //         $q->where('user_id', auth()->id());
            //     });
            // })
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
}

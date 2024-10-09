<?php

namespace App\Filament\User\Resources;

use App\Filament\User\Resources\ScheduleAssignmentResource\Pages;
use App\Filament\User\Resources\ScheduleAssignmentResource\RelationManagers;
use App\Models\ScheduleAssignment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;

class ScheduleAssignmentResource extends Resource
{
    protected static ?string $model = ScheduleAssignment::class;

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

                Tables\Columns\TextColumn::make('schedule.name')->label('Schedule'),
                //status
                Tables\Columns\TextColumn::make('status')->label('Status'),
                //assigned date
                Tables\Columns\TextColumn::make('created_at')->label('Assigned Date'),
            ])
            ->filters([
                //
            ])
            ->actions([

                Tables\Actions\ViewAction::make(),
            ])
            ->bulkActions([
                // Tables\Actions\BulkActionGroup::make([
                //     Tables\Actions\DeleteBulkAction::make(),
                // ]),
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
            'index' => Pages\ListScheduleAssignments::route('/'),
            'create' => Pages\CreateScheduleAssignment::route('/create'),
            'edit' => Pages\EditScheduleAssignment::route('/{record}/edit'),
        ];
    }

    public static function getEloquentQuery(): Builder
    {
        return parent::getEloquentQuery()->where('user_id', Auth::id());
    }
}

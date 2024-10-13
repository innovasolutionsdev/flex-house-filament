<?php

namespace App\Filament\Resources;
use App\Models\User;
use App\Filament\Resources\ScheduleAssignmentResource\Pages;
use App\Filament\Resources\ScheduleAssignmentResource\RelationManagers;
use App\Models\ScheduleAssignment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs\Tab;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ScheduleAssignmentResource extends Resource
{
    protected static ?string $model = ScheduleAssignment::class;
    // protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-clipboard-document-check';

    // protected static ?string $pluralLabel = 'Schedule Assignments'; // Plural
    protected static ?string $navigationGroup = 'Schedule Management';

    public static function form(Form $form): Form
    {
        return $form
        ->schema([

            Select::make('user_id')
            ->label('User')
            ->relationship('user', 'name')  // Load users by name
            ->required(),
                // ->validationRule('exists:users,id'),  // Ensure the selected user exists

            Select::make('schedule_id')
            ->label('Schedule')
            ->relationship('schedule', 'name')  // Load schedules by name
            ->required(),
                // ->validationRule('exists:schedules,id'),  // Ensure the selected schedule exists

            Select::make('status')
            ->label('Status')
            ->options([
                'active' => 'Active',
                'completed' => 'Completed',
                'pending' => 'Pending',
            ])
                ->required(),
                // ->validationRule('in:active,completed,pending'),  // Ensure the status is one of the predefined options

            Forms\Components\TextInput::make('duration')
            ->label('Duration')
            ->required()
                ->numeric()  // Ensures the duration is a number
                // ->validationRule('integer'),  // Ensure the duration is an integer
        ]);



    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

            Tables\Columns\TextColumn::make('user.name')->label('User')->searchable(),
            Tables\Columns\TextColumn::make('schedule.name')->label('Schedule'),
            //assigned at column
            Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable()->label('Assigned At'),

            Tables\Columns\TextColumn::make('status')->label('Status'),
            Tables\Columns\TextColumn::make('duration')->label('Duration'),

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
}

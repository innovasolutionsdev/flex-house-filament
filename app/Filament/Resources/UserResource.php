<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\Select;
use Filament\Tables\Columns\TagsColumn;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Filament\Forms\Components\FileUpload;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?string $navigationGroup = 'User Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                    Forms\Components\TextInput::make('name')->required(),
                    Forms\Components\TextInput::make('email')->required()->email(),
                    Forms\Components\TextInput::make('password')->required()->password(),
            // Select::make('schedules')
            // ->relationship('schedules', 'name')  // 'name' is the display field of the Schedule
            // ->multiple()  // Allows selecting multiple schedules
            // ->label('Assigned Schedules'),

//                    Forms\Components\Select::make('membership_type')
//                        ->options([
//                            'basic' => 'Basic',
//                            'premium' => 'Premium',
//                            // Add more membership types as needed
//                        ])
//                        ->required(),
//                    Forms\Components\Toggle::make('active')->label('Active Membership')->default(true),
//                    Forms\Components\DatePicker::make('membership_expires_at')->label('Membership Expiration Date')->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
            // TagsColumn::make('schedules.name')  // Display the names of the assigned schedules as tags
            // ->label('Assigned Schedules'),
                // membership_type column
                // active column
                // membership_expires_at column



//
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListUsers::route('/'),
            'create' => Pages\CreateUser::route('/create'),
            'edit' => Pages\EditUser::route('/{record}/edit'),
        ];
    }
}

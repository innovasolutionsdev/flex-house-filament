<?php

namespace App\Filament\Resources;

use App\Filament\Resources\UserResource\Pages;
use App\Filament\Resources\UserResource\RelationManagers;
use App\Models\MembershipPlan;
use App\Models\User;
use Carbon\Carbon;
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
                    Forms\Components\Select::make('membership_id')
                    ->label('Membership Plan')
                    ->options(MembershipPlan::all()->pluck('name', 'id'))
                    ->reactive()
                    ->required(),
                    Forms\Components\DatePicker::make('membership_start_date')
                    ->label('Start Date')
                    ->default(now()->format('Y-m-d'))
                    ->required()
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $get, callable $set) {
                        $plan = MembershipPlan::find($get('membership_id')); // Get the selected membership plan
                        if ($plan) {
                            $duration = $plan->duration; // Fetch the plan's duration
                            $endDate = Carbon::parse($state)->addDays($duration); // Calculate the end date
                            $set('membership_end_date', $endDate->toDateString()); // Set the end date field
                        }
                    }),
                Forms\Components\DatePicker::make('membership_end_date')
                    ->label('End Date')
                    ->disabled() // Make it visible but not editable
                    ->dehydrated(),

                Forms\Components\Toggle::make('status')
                    ->label('Active')
                    ->default(false),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable(),
                Tables\Columns\TextColumn::make('email')->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                ->dateTime()
                ->sortable(),
                //created at column


                Tables\Columns\BadgeColumn::make('status')
                    ->label('Status')
                    ->getStateUsing(function ($record) {
                        return $record->status == 1 ? 'Active' : 'Inactive';
                    })
                    ->colors([
                        'success' => 'Active', // Green for active
                        'danger' => 'Inactive',  // Red for inactive
                    ]),






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

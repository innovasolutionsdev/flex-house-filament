<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MembershipPaymentResource\Pages;
use App\Filament\Resources\MembershipPaymentResource\RelationManagers;
use App\Models\Membership;
use App\Models\MembershipPayment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use PhpParser\Node\Stmt\Label;

class MembershipPaymentResource extends Resource
{
    protected static ?string $model = MembershipPayment::class;

    protected static ?string $navigationIcon = 'heroicon-o-credit-card';

    protected static ?string $navigationGroup = 'Financial Management';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('user_id')
                    ->relationship('user', 'name')
                    ->required(),
                Forms\Components\TextInput::make('amount')
                    ->required()
                    ->numeric(),
                Forms\Components\DatePicker::make('payment_date')
                    ->default(now())
                    ->required(),
                Forms\Components\Select::make('payment_method')
                    ->options([
                        'cash' => 'Cash',
                        'card' => 'Card',
                        'bank_transfer' => 'Bank Transfer',

                    ])
                    ->required()
                    ->label('Payment Method'),
                Forms\Components\TextInput::make('collected_by')
                    ->label('Collected By')
                    ->required()
                    ->placeholder('Name of staff who collected payment'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')->searchable(),
                Tables\Columns\TextColumn::make('user.membershipPlan.name')
                ->label('Membership Plan')
                ->getStateUsing(fn($record) => $record->user->membershipPlan->name ?? 'Not Assigned')
                ->searchable(),
                Tables\Columns\TextColumn::make('amount'),
                Tables\Columns\TextColumn::make('payment_date')->sortable(),
                Tables\Columns\TextColumn::make('payment_method')
                    ->getStateUsing(fn($record) => match ($record->payment_method) {
                        'cash' => 'Cash',
                        'card' => 'Card',
                        'bank_transfer' => 'Bank Transfer',
                        default => 'Unknown',
                    }),
            ])
            ->filters([
                //
                Tables\Filters\SelectFilter::make('user_id')
                    ->relationship('user', 'name')
                    ->label('User Name'),
                Tables\Filters\SelectFilter::make('membership_plan_id')
                    ->relationship('user.membershipPlan', 'name')
                    ->label('Membership Plan'),
                Tables\Filters\SelectFilter::make('payment_method')
                    ->options([
                        'cash' => 'Cash',
                        'card' => 'Card',
                        'bank_transfer' => 'Bank Transfer',
                    ])
                    ->label('Payment Method'),
                Tables\Filters\Filter::make('payment_date')
                    ->form([
                        Forms\Components\DatePicker::make('start_date')
                            ->label('Start Date'),
                        Forms\Components\DatePicker::make('end_date')
                            ->label('End Date'),
                    ])
                    ->query(function (Builder $query, array $data) {
                        if (isset($data['start_date']) && isset($data['end_date'])) {
                            return $query->whereBetween('payment_date', [$data['start_date'], $data['end_date']]);
                        }
                    }),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make()
                ->url(fn(MembershipPayment $record) => route('membership.show', $record->id)), // Redirect to the custom Blade view,
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
            'index' => Pages\ListMembershipPayments::route('/'),
            'create' => Pages\CreateMembershipPayment::route('/create'),
            'edit' => Pages\EditMembershipPayment::route('/{record}/edit'),
        ];
    }







}

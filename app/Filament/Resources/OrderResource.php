<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrderResource\Pages;
use App\Filament\Resources\OrderResource\RelationManagers;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;

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
                TextColumn::make('id')->label('Order ID')->sortable(),
                TextColumn::make('email')->label('Email')->searchable(),
                TextColumn::make('first_name')->label('First Name')->sortable(),
                TextColumn::make('last_name')->label('Last Name')->sortable(),
                TextColumn::make('phone')->label('Phone'),

                // Payment Status Badge
                TextColumn::make('status')
                    ->label('Payment Status')
                    ->formatStateUsing(fn ($state) => match($state) {
                        0 => 'Pending',
                        1 => 'Confirmed',
                        2 => 'Cancelled',
                    })
                    ->color(fn ($state) => match($state) {
                        0 => 'warning',
                        1 => 'success',
                        2 => 'danger',
                    })
                    ->colors([
                        'warning' => 'pending',
                        'success' => 'confirmed',
                    ]),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListOrders::route('/'),
            'create' => Pages\CreateOrder::route('/create'),
            'edit' => Pages\EditOrder::route('/{record}/edit'),
        ];
    }
}

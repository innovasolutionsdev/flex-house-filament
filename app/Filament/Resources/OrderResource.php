<?php

namespace App\Filament\Resources;

use AlperenErsoy\FilamentExport\Actions\FilamentExportBulkAction;
use App\Filament\Resources\OrderResource\Pages;
use App\Models\Order;
use Filament\Forms;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\BadgeColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class OrderResource extends Resource
{
    protected static ?string $model = Order::class;
    protected static ?string $navigationIcon = 'heroicon-o-shopping-cart';

    protected static ?string $navigationGroup = 'Store Management';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('id')
                    ->label('Order ID')
                    ->disabled(),

                Forms\Components\TextInput::make('first_name')
                    ->label('First Name')
                    ->disabled(),

                Forms\Components\TextInput::make('phone')
                    ->label('Phone')
                    ->disabled(),

                // Payment Slip Display
                SpatieMediaLibraryFileUpload::make('payment_slip')
                    ->collection('bank_slips')
                    ->label('Payment Slip')
                    // Adjust height as needed
                    ->enableDownload()
                    ->enableOpen(),

                // Dropdown for Order Status
                Select::make('Order_status')
                    ->label('Order Status')
                    ->options([
                        0 => 'Processing',
                        1 => 'Delivered',
                        2 => 'Cancelled',
                    ])
                    ->default(0),

                // Dropdown for Payment Status
                Select::make('status')
                    ->label('Payment Status')
                    ->options([
                        0 => 'Pending',
                        1 => 'Confirmed',
                        2 => 'Denied',
                    ])
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([

                TextColumn::make('created_at')
                    ->date()
                    ->label('Order Date')
                    ->sortable(),
                TextColumn::make('first_name')->label('First Name')->sortable()->searchable(),
                TextColumn::make('payment_method')->label('Payment Method')->sortable()->searchable(),


                BadgeColumn::make('Order_status')
                    ->label('Order Status')
                    ->formatStateUsing(fn ($state) => match($state) {
                        0 => 'Processing',
                        1 => 'Delivered',
                        2 => 'Cancelled',
                    })
                    ->color(fn ($state) => match($state) {
                        0 => 'primary',
                        1 => 'success',
                        2 => 'danger',
                    }),

                BadgeColumn::make('status')
                    ->label('Payment Status')
                    ->formatStateUsing(fn ($state) => match($state) {
                        0 => 'Pending',
                        1 => 'Confirmed',
                        2 => 'Denied',
                    })
                    ->color(fn ($state) => match($state) {
                        0 => 'warning',
                        1 => 'success',
                        2 => 'danger',
                    }),


            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\ViewAction::make(),
                Action::make('receipt')
                    ->label('Receipt')
//                    ->icon('heroicon-o-receipt-tax')
                    ->action(function ($record, $livewire) {
                        // Open a modal or redirect to a receipt view
                        $livewire->dispatch('openReceiptModal', $record->id);
                    }),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
                FilamentExportBulkAction::make('export')
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

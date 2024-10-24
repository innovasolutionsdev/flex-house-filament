<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductResource\Pages;
use App\Filament\Resources\ProductResource\RelationManagers;
use App\Models\Product;
use Filament\Forms;
use Filament\Forms\Components\Grid;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TagsInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ProductResource extends Resource
{
    protected static ?string $model = Product::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('name')
                    ->required()
                    ->label('Product Name'),
                TextInput::make('price')
                    ->numeric()
                    ->required()
                    ->label('Price'),
                TextInput::make('discount_price')
                    ->numeric()
                    ->label('Discount Price'),
                TagsInput::make('tags')
                    ->label('Tags')
                    ->nullable() ->separator(','),
                Grid::make(3) // 3 columns for these 3 fields
                ->schema([
                    TextInput::make('stock_quantity')
                        ->numeric()
                        ->label('Stock Quantity'),

                    Toggle::make('in_stock')
                        ->label('In Stock'),

                    Toggle::make('on_sale')
                        ->label('On Sale'),
                ]),

                // Dropdown for Product Category
                Select::make('category_id')
                    ->label('Category')
                    ->relationship('category', 'name')
                    ->required(),

                // Dropdown for Product Brand
                Select::make('brand_id')
                    ->label('Brand')
                    ->relationship('brand', 'name')
                    ->required(),
                Forms\Components\RichEditor::make('description')
                    ->label('Description')
                    ->columnSpan('full') // Makes the RichEditor take the full width
                    ->required(),
                SpatieMediaLibraryFileUpload::make('product_image')
                    ->collection('product_image')
                    ->label('Product Image'),

                SpatieMediaLibraryFileUpload::make('nutrition_label')
                    ->collection('nutrition_label')
                    ->label('Nutritional Facts Label'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->label('Product Name'),
                Tables\Columns\TextColumn::make('price')->label('Price'),
                Tables\Columns\BooleanColumn::make('in_stock')->label('In Stock'),
                Tables\Columns\BooleanColumn::make('on_sale')->label('On Sale'),
                Tables\Columns\TextColumn::make('stock_quantity')->label('Stock Quantity'),
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
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProduct::route('/create'),
            'edit' => Pages\EditProduct::route('/{record}/edit'),
        ];
    }
}

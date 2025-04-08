<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PromotionBannerResource\Pages;
use App\Filament\Resources\PromotionBannerResource\RelationManagers;
use App\Models\Promotion_banner;
use App\Models\PromotionBanner;
use Filament\Forms;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class PromotionBannerResource extends Resource
{
    protected static ?string $model = Promotion_banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // fileds for title start/end dates and spatie img
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->maxLength(255),
                Forms\Components\DatePicker::make('start_date')
                    ->required()
                    ->label('Start Date'),
                Forms\Components\DatePicker::make('end_date')
                    ->required()
                    ->label('End Date'),

                SpatieMediaLibraryFileUpload::make('Banner Icon')
                    ->collection('promotion_banner_img')  // Use the correct media collection
                    ->preserveFilenames()
                    ->image()
                    ->required()
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')->label('Title'),
                Tables\Columns\TextColumn::make('start_date')->label('Start Date'),
                Tables\Columns\TextColumn::make('end_date')->label('End Date'),
                Tables\Columns\ImageColumn::make('promotion_banner_img')
                    ->label('Banner Icon')
                    ->getStateUsing(fn($record) => $record->getFirstMediaUrl('promotion_banner_img')),
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
            'index' => Pages\ListPromotionBanners::route('/'),
            'create' => Pages\CreatePromotionBanner::route('/create'),
            'edit' => Pages\EditPromotionBanner::route('/{record}/edit'),
        ];
    }
}

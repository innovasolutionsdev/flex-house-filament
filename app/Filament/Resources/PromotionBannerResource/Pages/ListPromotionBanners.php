<?php

namespace App\Filament\Resources\PromotionBannerResource\Pages;

use App\Filament\Resources\PromotionBannerResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPromotionBanners extends ListRecords
{
    protected static string $resource = PromotionBannerResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make()
                ->label('New Promotion Banner')
        ];
    }
}

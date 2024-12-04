<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Models\Order;
use Filament\Resources\Pages\Page;

class CustomReceiptPage extends Page
{
    protected static string $resource = OrderResource::class;

    protected static string $view = 'filament.resources.order-resource.pages.custom-receipt-page';

    protected static ?string $title = 'View Receipt';

    // Add a new property to hold the current record
    public Order $record;
}
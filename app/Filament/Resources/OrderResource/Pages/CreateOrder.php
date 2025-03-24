<?php

namespace App\Filament\Resources\OrderResource\Pages;

use App\Filament\Resources\OrderResource;
use App\Models\product;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateOrder extends CreateRecord
{
    protected static string $resource = OrderResource::class;

    protected function getRedirectUrl(): string
    {
        return static::getResource()::getUrl('index');
    }

    protected function afterCreate(): void
    {
        // Calculate and save the total after creating the order
        $order = $this->record;

        // Refresh to get the latest relationship data
        $order->refresh();


        // Calculate total price
        $total = 0;
        foreach ($order->order_product as $item) {
            $product = Product::find($item->product_id);
            if ($product) {
                $total += $product->price * $item->quantity;
            }
        }

        $grand_total = $total + 399;

        // Update the order total in the database
        \DB::table('orders')
            ->where('id', $order->id)
            ->update([
                'sub_total' => $total,
                'total' => $grand_total,
            ]);


        // Count the order items
        $itemCount = $order->order_product->count();

        // Update both total and item_count in the database
        \DB::table('orders')
            ->where('id', $order->id)
            ->update([

                'item_count' => $itemCount
            ]);

    }
    }

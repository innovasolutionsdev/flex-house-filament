<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\SoftDeletes;

class order_product extends Pivot
{
    use SoftDeletes;

    protected $table = 'order_product';

    protected $fillable = [
        'product_id',
        'order_id',
        'quantity',
    ];

    public function product(): BelongsTo
    {
        return $this->belongsTo(product::class);
    }

    public function order(): BelongsTo
    {
        return $this->belongsTo(Order::class);
    }
}

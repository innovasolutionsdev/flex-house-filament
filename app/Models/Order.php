<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class Order extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'id',
        'user_id',
        'first_name',
        'last_name',
        'zip_code',
        'address',
        'city',
        'mobile',
        'total',
        'status',
        'Order_status',
        'email',

    ];

    // GET THE USER WHO MADE THE ORDER
    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    // GET THE CART ASSOCIATED WITH THE ORDER
    protected function cart(): BelongsTo
    {
        return $this->belongsTo(cart::class);
    }
    public function products()
    {
        return $this->belongsToMany(product::class)->using(order_product::class)->withPivot('quantity');
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('bank_slips')->singleFile();
    }
}

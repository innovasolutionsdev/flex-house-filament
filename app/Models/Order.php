<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'cart_id',
        'billing_first_name',
        'billing_last_name',
        'billing_post_code',
        'billing_address',
        'billing_city',
        'billing_mobile',
        'cost',
        'shipping_status',
        'payment_status',
        'total',
        'email',
        'payment_method',
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
}

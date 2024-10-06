<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subscription extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'start_date',
        'end_date',
        'status',
        'delivery_time',
        'subscription_period',
        'price',
        'preference',
        'Number_of_meals',
        'Number_of_servings',
        'delivery_address',
    ];

    protected $casts = [
        'start_date' => 'date',
        'end_date' => 'date',
        'delivery_date' => 'date',
        'preference' => 'array'
    ];

    protected function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

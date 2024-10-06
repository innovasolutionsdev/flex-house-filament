<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use mysql_xdevapi\Table;

class MembershipPlan extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'price', 'duration'];

    public function subscriptions()
    {
        return $this->hasMany(Subscription::class);
    }

}

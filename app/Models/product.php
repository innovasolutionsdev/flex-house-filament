<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;

class product extends Model implements HasMedia
{
    use HasFactory, SoftDeletes;

    use InteractsWithMedia;

    protected $table = 'products';
    protected $fillable = [
        'name',
        'slug',
        'price',
        'description',
        'image_file',
        'status',
        'meta_title',
        'meta_description',
        'meta_keywords',
    ];

    public function imageget() {
        if (!empty($this->image_file) && file_exists('upload/productimg/' . $this->image_file)) {
            return asset('upload/productimg/' . $this->image_file); // Use asset() for proper URL
        } else {
            return "";
        }
    }

    static public function getsingle($preference){
        return self::select('products.*')
            ->where('products.category', '=', $preference)
            ->get();
    }

    public function category() : BelongsTo
    {
        return $this->belongsTo(category::class);
    }

    public function mealpreference()
    {
        return $this->belongsToMany(mealpreference::class);
    }

    public function mealKits()
    {
        return $this->belongsToMany(meal_kit::class)->using(meal_kit_product::class)->withPivot('quantity');
    }

    public function orders()
    {
        return $this->belongsToMany(Order::class)->using(order_product::class)->withPivot('quantity');
    }
}

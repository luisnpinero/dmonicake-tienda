<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Order;
use App\Cart;
use App\Category;
use App\Image;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'stock',
        'modified_by',
    ];

    public function orders(){
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }

    public function carts(){
        return $this->belongsToMany(Cart::class)->withPivot('quantity');
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }
}

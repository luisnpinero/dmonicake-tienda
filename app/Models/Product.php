<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Order;
use App\Models\Cart;
use App\Models\Category;
use App\Models\Image;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $with = [
        'images',
    ];

    protected $fillable = [
        'name',
        'description',
        'stock',
        'modified_by',
        'status',
    ];

    public function orders(){
        return $this->belongsToMany(Order::class)->withPivot('quantity');
    }

    public function carts(){
        return $this->morphedByMany(Cart::class, 'productable')->withPivot('quantity');
    }

    public function categories(){
        // $product = Product::factory()
        //             ->hasCategories(1,[
        //                 'id' => '1'
        //             ])
        //             ->create();

        return $this->belongsToMany(Category::class); //,'category_product','product_id','category_id');
    }

    public function images(){
        return $this->morphMany(Image::class, 'imageable');
    }
}

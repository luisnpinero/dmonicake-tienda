<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Product;
class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'modified_by',
    ];

    public function products(){
        return $this->belongsToMany(Product::class,'categories_products','category_id','product_id');
    }
}

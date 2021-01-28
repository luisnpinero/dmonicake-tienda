<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Product;
class Category extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'modified_by',
    ];

    public function products(){
        return $this->hasOne(Product::class);
        //,'category_product','category_id','product_id');
    }
}

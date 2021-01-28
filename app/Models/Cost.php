<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Category;
use App\Models\Order;
use App\Models\Currency;
use App\Models\Product;

class Cost extends Model
{
    use HasFactory;
    protected $fillable = [
        'cost',
        'modified_by',
        'currency_id',
    ];

    public function product(){
        return $this->hasOne(Product::class);
    }

    public function categories(){
        return $this->belongsToMany(Category::class);
    }

    public function orders(){
        return $this->belongsToMany(Order::class);
    }

    public function currency(){
        return $this->belongsTo(Currency::class);
    }
}

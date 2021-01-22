<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Category;
use App\Order;
use App\Currency;

class Cost extends Model
{
    use HasFactory;
    protected $fillable = [
        'cost',
        'modified_by',
    ];

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

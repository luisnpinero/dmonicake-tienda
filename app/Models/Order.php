<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\User;
use App\PaymentMethod;
use App\Product;
use App\Cost;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'total',
        'status',
        'user_id',
        'payment_method_id',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function payment_method(){
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }

    public function products(){
        return $this->belongsToMany(Product::class)->withPivot('quantity');
    }
    
    public function cost(){
        return $this->belongsToMany(Cost::class);
    }  
}

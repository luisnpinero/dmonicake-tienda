<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\User;
use App\Models\PaymentMethod;
use App\Models\Product;
use App\Models\Cost;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'total',
        'status',
        'user_id',
        'payment_method_id',
        'created_at',
        'updated_at',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function payment_method(){
        return $this->belongsTo(PaymentMethod::class, 'payment_method_id');
    }

    public function products(){
        return $this->morphToMany(Product::class, 'productable')->withPivot('quantity');
    }
    
    public function cost(){
        return $this->belongsToMany(Cost::class);
    }  
}

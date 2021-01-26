<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Order;

class PaymentMethod extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'modified_by',
    ];

    public function order(){
        return $this->hasMany(Order::class);
    }
}

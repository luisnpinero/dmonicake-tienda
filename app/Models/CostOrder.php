<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\Pivot;

class CostOrder extends Pivot
{
    use HasFactory;

    protected $fillable = [
        'cost_id',
        'order_id',
    ];

    public $timestamps = false;
}

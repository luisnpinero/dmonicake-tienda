<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Cost;

class Currency extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'status',
        'modified_by'
    ];

    public function costs(){
        return $this->hasMany(Cost::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealRequest extends Model
{
    protected $fillable = [
        'name',
        'quantity'
    ];
}

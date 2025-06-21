<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MealRequest extends Model
{
    protected $fillable = [
        'name',
        'quantity'
    ];

    function meal(){
        return $this->belongsTo(Meal::class);
    }
}

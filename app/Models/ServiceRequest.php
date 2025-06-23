<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ServiceRequest extends Model
{
            
    protected $fillable = [
        'email',
        'quantity',
        'service_id'
    ];

    function service(){
        return $this->belongsTo(Service::class);
    }
}

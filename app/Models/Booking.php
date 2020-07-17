<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $fillable = [
        'id',
        'user_id',
        'property_id',

    ];
    public function property(){
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }


}


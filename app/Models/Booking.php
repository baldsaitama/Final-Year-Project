<?php

namespace App\MOdels;

use App\Models\Property;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class booking extends Model
{
    use SoftDeletes;
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


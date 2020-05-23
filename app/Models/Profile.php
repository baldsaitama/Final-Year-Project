<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Profile extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'id',
        'user_id',
        'citizenship_number',
    ];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }
}

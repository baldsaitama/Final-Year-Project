<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class Property extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'status',
        'type',
        'category',
        'latitude',
        'longitude',
        'property_face',
        'road_width',
        'road_unit',
        'road_type',
        'built_year',
        'furnish',
        'kitchen',
        'bedroom',
        'bathroom',
        'living_room',
        'title',
        'description',
        'is_published',
        'price',
        'price_unit',
    ];


    public function amenities()
    {
    	return $this->morphToMany(Amenity::class, 'amenitable');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

    public function booking()
    {
        return $this->hasMany(Booking::class);
    }
}

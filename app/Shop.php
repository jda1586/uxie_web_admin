<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    protected $fillable = [
        'owner_id', 'name', 'category_id', 'street', 'outside_number', 'inside_number',
        'postal_code', 'phone', 'country_id', 'state_id', 'city_id', 'latitude', 'longitude', 'status'
    ];

    public function owner()
    {
        return $this->belongsTo('App\User', 'owner_id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}

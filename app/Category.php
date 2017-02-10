<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name', 'description', 'status'];

    public function shops()
    {
        return $this->hasMany('App\Shop');
    }
}

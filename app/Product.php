<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $filliable = ['name', 'price', 'description'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}

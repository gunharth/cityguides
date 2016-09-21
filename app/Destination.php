<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    public function categories()
    {
    	return $this->hasMany(Category::class);
    }
}

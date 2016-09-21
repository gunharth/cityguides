<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function destinatiions()
    {
    	return $this->belongsTo(Destination::class);
    }

    public function records()
    {
    	return $this->hasMany(Record::class);
    }
}

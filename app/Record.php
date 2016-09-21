<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Record extends Model
{
    public function category()
    {
    	return $this->belongsTo(Category::class);
    }
}

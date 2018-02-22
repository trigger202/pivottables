<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    
    public function Products()
    {
    	return $this->belongsToMany(Product::class);
    }
}

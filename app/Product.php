<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'product';
    protected $fillable = ['name', 'price', 'unit', 'description', 'image'];

    public function order()
    {
    	return $this->hasMany(Order::class);
    }
}

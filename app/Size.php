<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    protected $guarded=[];

    public function Product()
    {
        $this->hasMany(Product::class);

    }
}

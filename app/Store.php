<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Store extends Model
{
    public function Product()
    {
        $this->hasMany(Product::class);

    }
}

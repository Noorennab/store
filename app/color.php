<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class color extends Model
{

    public function product()
    {
        $this->hasMany(Product::class);

    }
}

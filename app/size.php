<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class size extends Model
{
    public function Product()
    {
        $this->hasMany(Product);

    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    public function Product()
    {
        $this->hasMany(Product);

    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class password_reset extends Model
{
    public function Product()
    {
        $this->belongsTo(Store);

    }
}

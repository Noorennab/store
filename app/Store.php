<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Product;

class Store extends Model
{
    protected $guarded=[];

    public function Product()
    {
        $this->hasMany(Product::class);

    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

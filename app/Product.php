<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Cart;

class Product extends Model
{
    public function carts()
    {
        return $this->belongsToMany(
            Cart::class,
            'line_items',
        )->withPivot(['id', 'quantity']);
    }
}

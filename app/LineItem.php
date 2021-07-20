<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LineItem extends Model
{
    protected $fillable = ['cart_id', 'product_id', 'quantity'];
    //cart_id、product_id、quantityの登録更新を許可
}

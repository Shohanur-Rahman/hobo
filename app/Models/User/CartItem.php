<?php

namespace App\Models\User;
use App\Models\Products;

use Illuminate\Database\Eloquent\Model;

class CartItem extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Products::class,'product_id');
    }
}

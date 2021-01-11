<?php

namespace App\Models\User;

use App\Models\Products;
use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $guarded = [];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}

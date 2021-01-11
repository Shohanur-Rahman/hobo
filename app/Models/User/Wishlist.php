<?php

namespace App\Models\User;

use App\Models\Products;
use Illuminate\Database\Eloquent\Model;

class Wishlist extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->belongsTo(Products::class);
    }
}

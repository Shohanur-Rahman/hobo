<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductColorMap extends Model
{
    protected $guarded = [];

    public function products(){
        $this->belongsToMany(Products::class);
    }

    public function color()
    {
        return $this->belongsTo(ProductColor::class);
    }
}

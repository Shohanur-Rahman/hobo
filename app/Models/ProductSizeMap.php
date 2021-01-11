<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductSizeMap extends Model
{
    protected $guarded = [];

    public function products(){
        $this->belongsToMany('App\Models\Products');
    }

    public function size()
    {
        return $this->belongsTo(ProductSize::class);
    }
}

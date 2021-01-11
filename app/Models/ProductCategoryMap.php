<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductCategoryMap extends Model
{
    public function category()
    {
        return $this->belongsTo(ProductCategory::class,'cat_id');
    }

    public function product()
    {
        return $this->belongsTo(Products::class,'product_id');
    }
}

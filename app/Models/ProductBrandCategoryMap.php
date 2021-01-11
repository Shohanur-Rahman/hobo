<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductBrandCategoryMap extends Model
{
    public function brand()
    {
        return $this->belongsTo(ProductBrands::class, 'brand_id');
    }
}

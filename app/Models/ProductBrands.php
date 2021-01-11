<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductBrands extends Model
{
    public function categories()
    {
        return $this->hasMany(ProductBrandCategoryMap::class, 'brand_id');
    }
}

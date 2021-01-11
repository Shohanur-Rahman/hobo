<?php

namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;

class ProductFeature extends Model
{
   protected $guarded = [];

    public function category()
    {
        return $this->belongsTo('App\Models\ProductCategory','category_id');
    }
}

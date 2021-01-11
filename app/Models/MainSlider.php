<?php

namespace App\models;

use App\Models\ProductCategory;

use Illuminate\Database\Eloquent\Model;

class MainSlider extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(ProductCategory::class,'category_id');
    }
}

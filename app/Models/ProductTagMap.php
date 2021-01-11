<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductTagMap extends Model
{
    public function tag()
    {
        return $this->belongsTo(ProductTags::class,'tag_id');
    }
}

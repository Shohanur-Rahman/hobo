<?php

namespace App\Models;

use App\Models\User\OrderProduct;
use App\Models\User\ProductReview;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $guarded = [];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');
    }

    public function orderProduct()
    {
        return $this->hasOne(OrderProduct::class);
    }

    public function color()
    {
        return $this->belongsTo(ProductColor::class, 'color_id');
    }

    public function size()
    {
        return $this->belongsTo(ProductSize::class, 'size_id');
    }

    public function productColorMaps()
    {
        return $this->hasMany(ProductColorMap::class, 'product_id');
    }

    public function productSizeMaps()
    {
        return $this->hasMany(ProductSizeMap::class, 'product_id');
    }

    public static function rating($id)
    {
        $reviews = ProductReview::where('product_id', $id)->average('rating');
        return $reviews;
    }

    public static function ratingCount($id)
    {
        $count = ProductReview::where('product_id', $id)->count();
        return $count;
    }

    public function deliveryTime()
    {
        return $this->belongsTo(DeliveryTime::class, 'delivery_id');
    }
}

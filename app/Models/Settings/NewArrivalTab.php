<?php

namespace App\Models;
namespace App\Models\Settings;

use Illuminate\Database\Eloquent\Model;

class NewArrivalTab extends Model
{
	protected $guarded = [];

    public function category()
    {
    	 return $this->belongsTo('App\Models\ProductCategory','cat_id');
    }
}

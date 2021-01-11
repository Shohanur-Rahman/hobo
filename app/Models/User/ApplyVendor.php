<?php

namespace App\Models\User;

use App\User;
use Illuminate\Database\Eloquent\Model;

class ApplyVendor extends Model
{
    protected $guarded = [];

    public function user(){
        return $this->belongsTo(User::class);
    }
}

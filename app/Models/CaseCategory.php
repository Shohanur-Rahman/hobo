<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseCategory extends Model
{
    protected $guarded = [];

    public function caseType(){
        return $this->belongsTo(CaseType::class);
    }
}

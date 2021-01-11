<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CaseType extends Model
{
    protected $guarded = [];

    public function caseCategories()
    {
        return $this->hasMany(CaseCategory::class);
    }
}

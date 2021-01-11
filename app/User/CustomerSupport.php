<?php

namespace App\User;

use App\Models\CaseCategory;
use App\Models\CaseType;
use Illuminate\Database\Eloquent\Model;

class CustomerSupport extends Model
{
    protected $guarded = [];

    public function caseType()
    {
        return $this->belongsTo(CaseType::class);
    }

    public function caseCategory()
    {
        return $this->belongsTo(CaseCategory::class);
    }
}

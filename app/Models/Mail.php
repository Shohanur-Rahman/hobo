<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Mail extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function mailAddresses()
    {
        return $this->hasMany(MailAddress::class)->withTrashed();
    }

    public static function draftCount()
    {
        $draftCount = Mail::whereHas('mailAddresses', function($q){
            $q->where('status', 0);
            $q->where('name','=', null);
        })->where('read_at',0)->count();

        return $draftCount;
    }
}

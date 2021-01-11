<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class MailAddress extends Model
{
    use SoftDeletes;

    protected $guarded = [];

    public function mail()
    {
        return $this->belongsTo(Mail::class)->withTrashed();
    }

    public static function indexMailCount()
    {
        $sendMailCount = MailAddress::where('name','!=',null)->where('read_at',0)->count();
        return $sendMailCount;
    }

    public static function trashCount()
    {
        $trashCount = MailAddress::where(['read_at'=>0])->onlyTrashed()->count();

        return $trashCount;
    }
}

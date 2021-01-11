<?php

namespace App;

use App\Models\ProductCategory;
use App\Models\SocialProvider;
use App\Models\User\ApplyVendor;
use App\Models\User\Order;
use App\Models\User\ShippingAddress;
use App\Models\User\UserProfile;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','user_type','admin_comment','is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

//    protected static function boot()
//    {
//        parent::boot();
//
//        static::created(function ($user) {
//            $user->userProfile()->create([]);
//        });
//    }


    public function getUserTypeAttribute($userType)
    {
        return ucfirst($userType);
    }

    public function category(){
        return $this->hasMany(ProductCategory::class);
    }

    public function userProfile()
    {
        return $this->hasOne(UserProfile::class);
    }

    public function applyVendor(){
        return $this->hasOne(ApplyVendor::class);
    }

    public function shippingAddresses()
    {
        return $this->hasMany(ShippingAddress::class);
    }

    public function orders(){
        return $this->hasMany(Order::class,'customer_id');
    }

    public function socialProviders()
    {
        return $this->hasMany(SocialProvider::class);
    }
}

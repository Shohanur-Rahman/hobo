<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('isAdmin',function ($user){
            return $user->user_type === 'Admin';
        });

        Gate::define('access-settings', function ($user,$insert) {

            return $user->user_type == 'Admin' || $user->user_type == 'Super-admin' || $user->user_type == 'Developer' || $user->user_type == 'Editor' || $user->id == $insert->user_id;
        });
    }
}

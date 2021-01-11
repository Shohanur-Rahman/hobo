<?php

namespace App\Providers;

use App\Models\ProductCategory;
use App\Models\User\Country;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        Schema::defaultStringLength(191);
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
       View::composer(['admin.modules.settings.website.product_features.layout.*'],function ($view){
            $view->with('categories',ProductCategory::where('parent_id',0)->with('user','childrens.childrens')->get());

       });

        View::composer(['user.pages.common.countries.*'],function ($view){
            $view->with('countries',Country::all());

        });
    }
}

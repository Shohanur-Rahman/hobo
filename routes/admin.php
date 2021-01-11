<?php

use Illuminate\Support\Facades\Route;
Route::group(['middleware' => ['auth','isCustomer']], function() {


    Route::group(['prefix' => 'brands'], function () {
        Route::get('/', 'ProductBrandsController@index')->name('brands.index');
        Route::get('/create', 'ProductBrandsController@create')->name('brands.create');
        Route::post('/', 'ProductBrandsController@store')->name('brands.store');
        Route::get('/{id}/edit', 'ProductBrandsController@edit')->name('brands.edit');
        Route::patch('/{id}', 'ProductBrandsController@update')->name('brands.update');
        Route::delete('/{brand}', 'ProductBrandsController@destroy')->name('brands.destroy');
    });

    Route::group(['prefix' => 'tags'], function () {
        Route::get('/', 'ProductTagController@index')->name('tags.index');
        Route::get('/create', 'ProductTagController@create')->name('tags.create');
        Route::post('/', 'ProductTagController@store')->name('tags.store');
        Route::get('/{id}/edit', 'ProductTagController@edit')->name('tags.edit');
        Route::patch('/{id}', 'ProductTagController@update')->name('tags.update');
        Route::delete('/{id}', 'ProductTagController@destroy')->name('tags.destroy');
    });

    Route::group(['prefix' => 'products'], function () {
        Route::get('/', 'ProductsController@index')->name('products.index');
        Route::get('/create', 'ProductsController@create')->name('products.create');
        Route::post('/', 'ProductsController@store')->name('products.store');
        Route::get('/{id}/edit', 'ProductsController@edit')->name('products.edit');
        Route::get('/{id}/copy', 'ProductsController@copy')->name('products.copy');
        Route::patch('/{id}/edit', 'ProductsController@update')->name('products.update');
        Route::delete('/{id}', 'ProductsController@destroy')->name('products.destroy');
        Route::get('/{product}/gallery/edit', 'ProductsController@gallery')->name('products.gallery');
        
        Route::delete('/{gallery}/gallery', 'ProductsController@destroyGallery')->name('products.gallery.destroy');
    });



    Route::get('/dashboard','DashboardController@index')->name('dashboard');
    Route::get('/monthly-sell','DashboardController@monthlySellChartData')->name('dashboard.monthly_sell');
    Route::get('/daily-sell','DashboardController@dailySellChartData')->name('dashboard.daily_sell');
    Route::get('/sell-by-category','DashboardController@productSellByCategory')->name('dashboard.sell_by_category');
    Route::get('/products-by-category','DashboardController@productCountByCategory')->name('dashboard.product_on_category');

    Route::get('/dashboard-copy','DashboardController@index_copy')->name('dashboard.copy');

    Route::group(['prefix'=>'product-categories'], function(){
        Route::get('','ProductCategoryController@index')->name('product-categories.index');
        Route::get('/create','ProductCategoryController@create')->name('product-categories.create');
        Route::post('','ProductCategoryController@store')->name('product-categories.store');
        Route::get('/{productCategory}/edit','ProductCategoryController@edit')->name('product-categories.edit');
        Route::patch('/{productCategory}','ProductCategoryController@update')->name('product-categories.update');
        Route::delete('/{productCategory}','ProductCategoryController@destroy')->name('product-categories.destroy');
    });

    Route::group(['prefix'=>'warehouses'], function(){
        Route::get('','WarehouseController@index')->name('warehouses.index');
        Route::get('/create','WarehouseController@create')->name('warehouses.create');
        Route::post('','WarehouseController@store')->name('warehouses.store');
        Route::get('/{warehouse}/edit','WarehouseController@edit')->name('warehouses.edit');
        Route::patch('/{warehouse}','WarehouseController@update')->name('warehouses.update');
        Route::delete('/{warehouse}','WarehouseController@destroy')->name('warehouses.destroy');
    });

    Route::group(['prefix'=>'product-sizes'], function(){
        Route::get('','ProductSizeController@index')->name('product-sizes.index');
        Route::get('/create','ProductSizeController@create')->name('product-sizes.create');
        Route::post('','ProductSizeController@store')->name('product-sizes.store');
        Route::get('/{productSize}/edit','ProductSizeController@edit')->name('product-sizes.edit');
        Route::patch('/{productSize}','ProductSizeController@update')->name('product-sizes.update');
        Route::delete('/{productSize}','ProductSizeController@destroy')->name('product-sizes.destroy');
    });

    Route::group(['prefix'=>'product-colors'], function(){
        Route::get('','ProductColorController@index')->name('product-colors.index');
        Route::get('/create','ProductColorController@create')->name('product-colors.create');
        Route::post('','ProductColorController@store')->name('product-colors.store');
        Route::get('/{productColor}/edit','ProductColorController@edit')->name('product-colors.edit');
        Route::patch('/{productColor}','ProductColorController@update')->name('product-colors.update');
        Route::delete('/{productColor}','ProductColorController@destroy')->name('product-colors.destroy');
    });


    Route::group(['prefix'=>'delivery-times'], function(){
        Route::get('','DeliveryTimesController@index')->name('delivery.times.index');
        Route::get('/create','DeliveryTimesController@create')->name('delivery.times.create');
        Route::post('','DeliveryTimesController@store')->name('delivery.times.store');
        Route::get('/{deliveryTime}/edit','DeliveryTimesController@edit')->name('delivery.times.edit');
        Route::patch('/{deliveryTime}','DeliveryTimesController@update')->name('delivery.times.update');
        Route::delete('/{deliveryTime}','DeliveryTimesController@destroy')->name('delivery.times.destroy');
    });


    Route::group(['middleware' => 'isAdmin'], function() {
        Route::group(['prefix'=>'product-availabilities'], function(){
            Route::get('','ProductAvailabilityController@index')->name('product-availabilities.index');
            Route::get('/create','ProductAvailabilityController@create')->name('product-availabilities.create');
            Route::post('','ProductAvailabilityController@store')->name('product-availabilities.store');
            Route::get('/{productAvailability}/edit','ProductAvailabilityController@edit')->name('product-availabilities.edit');
            Route::patch('/{productAvailability}','ProductAvailabilityController@update')->name('product-availabilities.update');
            Route::delete('/{productAvailability}','ProductAvailabilityController@destroy')->name('product-availabilities.destroy');
        });

        Route::group(['prefix'=>'main-sliders'], function(){
            Route::get('','MainSliderController@index')->name('main-sliders.index');
            Route::get('/create','MainSliderController@create')->name('main-sliders.create');
            Route::post('','MainSliderController@store')->name('main-sliders.store');
            Route::get('/{mainSlider}/edit','MainSliderController@edit')->name('main-sliders.edit');
            Route::patch('/{mainSlider}','MainSliderController@update')->name('main-sliders.update');
            Route::delete('/{mainSlider}','MainSliderController@destroy')->name('main-sliders.destroy');
        });

        Route::group(['prefix'=>'users'], function(){
//            Route::get('','UserController@index')->name('users.index');
//            Route::get('/{user}/edit','UserController@edit')->name('users.edit');
//            Route::patch('/{user}','UserController@update')->name('users.update');
            Route::get('{type}','UserController@index')->name('users.index');
            Route::get('{type}/{user}/edit','UserController@edit')->name('users.edit');
            Route::patch('/{type}/{user}','UserController@update')->name('users.update');
        });

        Route::group(['prefix' => 'website-settings'], function () {
            Route::group(['prefix' => 'arrivals'], function () {
                Route::get('/', 'Settings\NewArrivalController@index')->name('arrivals.index');
                Route::get('/create', 'Settings\NewArrivalController@create')->name('arrivals.create');
                Route::post('/', 'Settings\NewArrivalController@store')->name('arrivals.store');
                Route::get('/{id}/edit', 'Settings\NewArrivalController@edit')->name('arrivals.edit');
                Route::patch('/{id}', 'Settings\NewArrivalController@update')->name('arrivals.update');

            });
        });

        Route::group(['prefix'=>'website-settings/product-features'], function(){
            Route::get('','Settings\ProductFeatureController@index')->name('product-features.index');
            Route::get('/create','Settings\ProductFeatureController@create')->name('product-features.create');
            Route::post('','Settings\ProductFeatureController@store')->name('product-features.store');
            Route::get('/{productFeature}/edit','Settings\ProductFeatureController@edit')->name('product-features.edit');
            Route::patch('/{productFeature}','Settings\ProductFeatureController@update')->name('product-features.update');
            Route::delete('/{productFeature}','Settings\ProductFeatureController@destroy')->name('product-features.destroy');
        });

        Route::group(['prefix'=>'website-settings/ecom-supports'], function(){
            Route::get('','Settings\EcomSupportController@index')->name('ecom-supports.index');
            Route::get('/create','Settings\EcomSupportController@create')->name('ecom-supports.create');
            Route::post('','Settings\EcomSupportController@store')->name('ecom-supports.store');
            Route::get('/{ecomSupport}/edit','Settings\EcomSupportController@edit')->name('ecom-supports.edit');
            Route::patch('/{ecomSupport}','Settings\EcomSupportController@update')->name('ecom-supports.update');
            Route::delete('/{ecomSupport}','Settings\EcomSupportController@destroy')->name('ecom-supports.destroy');
        });

        Route::group(['prefix'=>'ecom-settings'], function(){
            Route::get('/','EcomSettingController@index')->name('ecom-settings.index');
            Route::patch('{ecomSetting}/show','EcomSettingController@update')->name('ecom-settings.update');
        });

        Route::group(['prefix'=>'website-settings/site-settings'], function(){
            Route::get('/edit','SiteSettingController@edit')->name('site-settings.edit');
            Route::patch('{siteSetting}/show','SiteSettingController@update')->name('site-settings.update');
        });

        Route::group(['prefix'=>'subscribers'], function(){
            Route::get('','SubscriberController@index')->name('subscribers.index');
            Route::get('/{newsLetter}/edit','SubscriberController@edit')->name('subscribers.edit');
            Route::patch('/{newsLetter}','SubscriberController@update')->name('subscribers.update');
            Route::delete('/{newsLetter}','SubscriberController@destroy')->name('subscribers.destroy');
        });

        Route::group(['prefix'=>'mails'], function(){
            Route::get('','MailController@index')->name('mails.index');

            Route::get('/create','MailController@create')->name('mails.create');
            Route::post('','MailController@store')->name('mails.store');

            Route::get('/send','MailController@sendMail')->name('send-mail.index');
//            Route::get('/send/{mailAddress}/show','MailController@sendMailShow')->name('send-mails.show');
            Route::get('/draft','MailController@draftMail')->name('draft-mail.index');
            Route::get('/draft/{mail}/edit','MailController@draftedit')->name('draft-mail.edit');
            Route::patch('/draft/{mail}','MailController@draftUpdate')->name('draft-mail.update');
            Route::delete('/draft','MailController@draftDestroy')->name('draft-mail.destroy');

            Route::delete('/destroy','MailController@destroy')->name('mails.destroy');

            Route::get('/trash-mails','MailController@trashIndex')->name('trash-mails.index');
            Route::get('/{mailAddress}','MailController@show')->name('mails.show');
            Route::delete('trash-mails','MailController@trashDestroy')->name('trash-mails.destroy');
        });

        Route::group(['prefix'=>'vendor-applications'], function(){
            Route::get('/','VendorApplicationController@index')->name('vendor-applications.index');
            Route::get('{applyVendor}/show','VendorApplicationController@show')->name('vendor-applications.show');
            Route::patch('{applyVendor}','VendorApplicationController@update')->name('vendor-applications.update');
        });


        Route::group(['prefix' => 'case-types'], function () {
            Route::get('/', 'CaseTypeController@index')->name('case-types.index');
            Route::get('/create', 'CaseTypeController@create')->name('case-types.create');
            Route::post('/', 'CaseTypeController@store')->name('case-types.store');
            Route::get('/{caseType}/edit', 'CaseTypeController@edit')->name('case-types.edit');
            Route::patch('/{caseType}', 'CaseTypeController@update')->name('case-types.update');
            Route::delete('/{caseType}', 'CaseTypeController@destroy')->name('case-types.destroy');

        });

        Route::group(['prefix' => 'case-categories'], function () {
            Route::get('/', 'CaseCategoryController@index')->name('case-categories.index');
            Route::get('/create', 'CaseCategoryController@create')->name('case-categories.create');
            Route::post('/', 'CaseCategoryController@store')->name('case-categories.store');
            Route::get('/{caseCategory}/edit', 'CaseCategoryController@edit')->name('case-categories.edit');
            Route::patch('/{caseCategory}', 'CaseCategoryController@update')->name('case-categories.update');
            Route::delete('/{caseCategory}', 'CaseCategoryController@destroy')->name('case-categories.destroy');

        });

        Route::group(['prefix' => 'customer-supports'], function () {
            Route::get('/', 'CustomerSupportController@index')->name('customer-supports.index');
            Route::get('/{customerSupport}', 'CustomerSupportController@show')->name('customer-supports.show');
            Route::get('/{customerSupport}/user-profile', 'CustomerSupportController@profileShow')->name('profile-show.show');
            Route::delete('/{customerSupport}', 'CustomerSupportController@destroy')->name('customer-supports.destroy');
        });


    });

    Route::group(['prefix'=>'orders'], function(){
        Route::get('/','OrderController@index')->name('orders.index');
        Route::get('{order}/show','OrderController@show')->name('orders.show');
        Route::patch('status/{order}','OrderController@updateStatus')->name('orders-status.update');
    });

    Route::group(['prefix'=>'profiles'], function(){
        Route::get('/create','ProfileController@create')->name('admin-profiles.create');
        Route::patch('/','ProfileController@update')->name('admin-profiles.update');
        Route::patch('/avatar','ProfileController@avatarUpdate')->name('admin-avatar.update');
        Route::get('/change-password','ProfileController@passwordEdit')->name('admin-change-password.edit');
        Route::patch('/change-password','ProfileController@passwordUpdate')->name('admin-change-password.update');
    });

    Route::group(['prefix'=>'refunds'], function(){
        Route::get('/','PaypalRefundController@index')->name('refunds.index');
        Route::get('/create','PaypalRefundController@create')->name('refunds.create');
        Route::post('/create','PaypalRefundController@store')->name('refunds.store');
    });
});






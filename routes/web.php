<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {

    return view('user.pages.third.welcome');

})->name('app.home');

/*Route::get('/', function () {
    return view('user.pages.third.welcome');
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/test', 'TestController@test_page')->name('test_page');

Route::get('login/{provider}', 'UserController@redirectToProvider')->name('socialite.provider');
Route::get('login/{provider}/callback', 'UserController@handleProviderCallback')->name('socialite.callback');

Route::get('/login','UserController@login')->name('login');
Route::post('/login','UserController@show')->name('show');
Route::get('/register','UserController@register')->name('register');
Route::post('/register','UserController@store')->name('register.store');

Route::get('/forget-password','UserController@forgetPasswordIndex')->name('forget-password.index');
Route::post('/forget-password','UserController@forgetPasswordStore')->name('forget-password.store');

Route::get('/about-us','User\PagesController@about')->name('pages.about');
Route::get('/contact-us','User\PagesController@contact')->name('pages.contact');
Route::post('/contact-us/send-mail','User\PagesController@sendMailStore')->name('send-mail.store');
Route::get('/faq','User\PagesController@faq')->name('pages.faq');
Route::get('/privacy-policy','User\PagesController@privacyPolicy')->name('pages.privacy.policy');
Route::get('/terms-conditions','User\PagesController@termsConditions')->name('pages.terms.conditions');
Route::get('/media-inquiries','User\PagesController@mediaInquiries')->name('pages.Media.Inquiries');


//password recovery code
Route::group(['middleware' => 'recovery_code'], function() {
    Route::get('/password-recovery', 'UserController@passwordRecoveryIndex')->name('password.recovery.index');
    Route::post('/password-recovery', 'UserController@passwordRecovery')->name('password.recovery');

    Route::get('/password-update', 'UserController@passwordUpdateGet')->name('password.update');
    Route::post('/password-update', 'UserController@passwordUpdateStore')->name('password.update.store');
});

Route::get('/user-ui', 'TestController@user_ui')->name('user_ui');

Route::group(['middleware'=>'auth'],function(){

    Route::group(['prefix'=>'profiles'],function(){
        Route::get('','User\UserProfileController@index')->name('profiles.index');
        Route::get('/edit','User\UserProfileController@edit')->name('profiles.edit');
        Route::patch('/','User\UserProfileController@update')->name('profiles.update');

        Route::get('/change-password','User\UserProfileController@changePasswordEdit')->name('change-password.edit');
        Route::patch('/change-password','User\UserProfileController@changePasswordUpdate')->name('change-password.update');

        Route::patch('/avatar','User\UserProfileController@avatarUpdate')->name('avatar.update');
    });

    Route::group(['prefix'=>'profiles/shipping-address'],function(){
        Route::get('/','User\ShippingAddressController@index')->name('shipping-address.index');
        Route::get('/create','User\ShippingAddressController@create')->name('shipping-address.create');
        Route::post('/','User\ShippingAddressController@store')->name('shipping-address.store');
        Route::get('/{shippingAddress}/edit','User\ShippingAddressController@edit')->name('shipping-address.edit');
        Route::patch('/{shippingAddress}','User\ShippingAddressController@update')->name('shipping-address.update');
    });

    Route::group(['prefix'=>'profiles/apply-vendors'],function(){
        Route::get('/verify-email','User\ApplyVendorController@verifyEmail')->name('verify-email.store');
        Route::get('/code','User\ApplyVendorController@verifyCodeCreate')->name('verify-code.create');
        Route::post('/code','User\ApplyVendorController@verifyCodeStore')->name('verify-code.store');
    });

    Route::group(['prefix'=>'companies'],function (){
        Route::get('/','User\CompanyController@create')->name('companies.create');
        Route::post('/','User\CompanyController@store')->name('companies.store');

    });

    Route::group(['prefix'=>'profiles/apply-vendors'],function(){
        Route::post('/product-reviews/{id}','User\ProductReviewController@productReviews')->name('product-reviews.store');
     });


    Route::get('/execute-payment', 'User\PaymentController@execute')->name('payments.execute');
    Route::post('/create-payment', 'User\PaymentController@create')->name('payments.create');

    Route::group(['prefix'=>'checkouts'], function(){
        Route::get('/thank-you','User\CheckoutController@index')->name('checkouts.index');
        Route::get('/','User\CheckoutController@create')->name('checkouts.create');
        Route::get('/processing','User\CheckoutController@store')->name('checkouts.store');
        Route::get('/new-shipping-address','User\CheckoutController@shippingAddressCreate')->name('new-shipping-address.create');
        Route::post('/new-shipping-address','User\CheckoutController@shippingAddressStore')->name('new-shipping-address.store');
    });

    Route::group(['prefix'=>'orders'], function(){
        Route::get('/','User\OrderController@index')->name('orders-details.index');
        Route::get('/{id}','User\OrderController@show')->name('orders-details.show');
    });

    Route::group(['prefix'=>'newsletter'], function(){
        Route::post('/','User\NewsLetterController@store');
    });

});

Route::group(['prefix'=>'wish-lists'], function(){
    Route::get('/','User\WishlistController@index')->name('wish-lists.index');
    Route::post('/','User\WishlistController@store');
    Route::get('/{wishlist}','User\WishlistController@destroy')->name('wish-lists.destroy');
    Route::patch('/','User\WishlistController@update')->name('wish-lists.update');
});


Route::group(['middleware'=>'auth'],function(){

    Route::post('/add-to-cart', 'User\ProductController@add_to_cart')->name('product.add_to_cart');
    Route::get('/view-cart', 'User\ProductCartController@index')->name('cart.index');
    Route::get('/delete/{cart}', 'User\ProductCartController@delete')->name('cart.delete');
    Route::patch('/cart', 'User\ProductCartController@update')->name('cart.update');
    Route::get('/clear', 'User\ProductCartController@clear')->name('cart.clear');
    Route::post('/wish-list/carts', 'User\ProductCartController@wishListCartStore')->name('wish-lists-carts.store');

    Route::group(['prefix' => 'customer-supports'], function () {
        Route::get('/', 'User\CustomerSupportController@create')->name('customer-supports.create');
        Route::post('/', 'User\CustomerSupportController@store')->name('customer-supports.store');
        Route::get('/case-category', 'User\CustomerSupportController@caseCategory');
    });



});

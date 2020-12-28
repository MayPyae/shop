<?php
Route::get('/', function () {
    return view('test');
});
Route::any('{slug}', function () {
    return view('test');
});

Route::group(['prefix' => 'admin','namespace'=>'admin',"as"=>'admin.'], function () {
    Route::get('/dashboard','DashboardController')->name("dashboard");
    Route::resource('/posts','PostController');
    Route::resource('/categories','CategoryController');
    Route::get('/setting','SettingController')->name('setting');
});

Route::group(['prefix' => 'user','namespace'=>'user',"as"=>'user.'], function () {
    Route::get('/index','IndexController')->name("index");
    Route::get('/item','ItemController')->name("item");
    Route::get('/contact','ContactController')->name("contact");
    Route::get('/shop','ShopController')->name("shop");
    Route::get('/checkout','CheckoutController')->name("checkout");
     Route::get('/shopping','ShoppingController')->name("shopping");
     Route::get('/promo','PromoController')->name("promo");
     Route::get('/view','ViewController')->name("view");
    //   Route::get('/promotion','PromotionController')->name("promotion");

});

<?php

use Illuminate\Support\Facades\Route;


//back end routes
route::get('dashboard','backend\dashboardController@index')->name('dashboard')->middleware('users');
route::get('dashboard/login', 'backend\usersController@login')->name('login');
route::group(['prefix' => 'backend/users/', 'namespace' => 'backend'], function () {
    //users user stuff
    route::get('list', 'usersController@index')->name('users.list')->middleware('users');
    route::post('login', 'usersController@login_post')->name('users.login_post');
    route::get('register', 'usersController@register')->name('users.register')->middleware('users');
    route::post('register', 'usersController@register_post')->name('users.register_post')->middleware('users');
    route::get('edit/{id}', 'usersController@edit')->name('users.edit')->middleware('users');
    route::post('edit/{id}', 'usersController@edit_post')->name('users.edit_post')->middleware('users');
    route::get('log_out', 'usersController@log_out')->name('users.logout')->middleware('users');
    route::get('delete/{id}', 'usersController@delete')->name('users.delete')->middleware('users');
});

route::group(['prefix' => 'backend/products/', 'namespace' => 'backend','middleware'=>'users'], function () {
    route::get('list','productsController@list')->name('back.products.list');
    route::get('add','productsController@add')->name('back.products.add');
    route::post('add','productsController@add_post')->name('back.products.add_post');
    route::get('edit/{id}','productsController@edit')->name('back.products.edit');
    route::post('edit/{id}','productsController@edit_post')->name('back.products.edit_post');
    route::get('show/{id}','productsController@show')->name('back.products.show');
    route::get('hidden/{id}','productsController@hidden')->name('back.products.hidden');
    route::get('delete/{id}','productsController@delete')->name('back.products.delete');

});
route::group(['prefix' => 'backend/categories/', 'namespace' => 'backend','middleware'=>'users'], function () {
    route::get('list','categoriesController@list')->name('back.categories.list');
    route::get('add','categoriesController@add')->name('back.categories.add');
    route::post('add','categoriesController@add_post')->name('back.categories.add_post');
    route::get('edit/{id?}','categoriesController@edit')->name('back.categories.edit');
    route::post('edit/{id}','categoriesController@edit_post')->name('back.categories.edit_post');
    route::get('delete/{id}','categoriesController@delete')->name('back.categories.delete');
});
route::group(['prefix' => 'backend/brands/', 'namespace' => 'backend','middleware'=>'users'], function () {
    route::get('list','brandsController@list')->name('back.brands.list');
    route::get('add','brandsController@add')->name('back.brands.add');
    route::post('add','brandsController@add_post')->name('back.brands.add_post');
    route::get('edit/{id?}','brandsController@edit')->name('back.brands.edit');
    route::post('edit/{id}','brandsController@edit_post')->name('back.brands.edit_post');
    route::get('delete/{id}','brandsController@delete')->name('back.brands.delete');
});
route::group(['prefix' => 'backend/tags/', 'namespace' => 'backend','middleware'=>'users'], function () {
    route::get('list','tagsController@list')->name('back.tags.list');
    route::get('add','tagsController@add')->name('back.tags.add');
    route::post('add','tagsController@add_post')->name('back.tags.add_post');
    route::get('edit/{id?}','tagsController@edit')->name('back.tags.edit');
    route::post('edit/{id}','tagsController@edit_post')->name('back.tags.edit_post');
    route::get('delete/{id}','tagsController@delete')->name('back.tags.delete');
});
route::group(['prefix' => 'backend/sliders/', 'namespace' => 'backend','middleware'=>'users'], function () {
    route::get('list','slidersController@list')->name('back.sliders.list');
    route::get('add','slidersController@add')->name('back.sliders.add');
    route::post('add','slidersController@add_post')->name('back.sliders.add_post');
    route::get('edit/{id}','slidersController@edit')->name('back.sliders.edit');
    route::post('edit/{id}','slidersController@edit_post')->name('back.sliders.edit_post');
    route::get('show/{id}','slidersController@show')->name('back.sliders.show');
    route::get('hidden/{id}','slidersController@hidden')->name('back.sliders.hidden');
    route::get('delete/{id}','slidersController@delete')->name('back.sliders.delete');
});

route::group(['prefix' => 'backend/customers/', 'namespace' => 'backend','middleware'=>'users'], function () {
    route::get('list','customersController@list')->name('back.customers.list');
    route::get('delete/{id}','customersController@delete')->name('back.customers.delete');
});

route::group(['prefix'=>'backend/orders/','namespace'=>'backend'],function(){
    route::get('list','ordersController@list')->name('back.orders.list');
    route::get('delete/{id}','ordersController@delete')->name('back.orders.delete');
});

route::group(['prefix'=>'backend/siteinfos/','namespace'=>'backend','middleware'=>'users'],function(){
    route::get('list','siteinfosController@list')->name('back.siteinfos.list');
    route::get('edit/{id}','siteinfosController@edit')->name('back.siteinfos.edit');
    route::post('edit/{id}','siteinfosController@edit_post')->name('back.siteinfos.edit_post');
});
//==================================================================================================
//front end routes
//Auth::routes();

route::get('/','frontend\homeController@index')->name('/');
route::get('/','frontend\homeController@index')->name('home');
route::get('contact_us','frontend\homeController@contact_us')->name('contact_us');
route::get('about_us','frontend\homeController@about_us')->name('about_us');
route::get('frontend/products/detail/{id}','frontend\homeController@detail')->name('back.products.detail');
route::get('frontend/sub/{sub_cat_id}','frontend\homeController@sub')->name('front.sub.products');
route::get('frontend/brand/{brand_id}','frontend\homeController@brand')->name('front.brand.products');


route::group(['prefix'=>'frontend/carts/','namespace'=>'frontend','middleware'=>'customers'],function(){
    route::get('list','cartsController@list')->name('front.carts.list');
    route::get('add/{customer_id}/{product_id}','cartsController@add')->name('add_to_cart');
    route::get('up/{customer_id}/{product_id}','cartsController@up_qty')->name('up_qty');
    route::get('down/{customer_id}/{product_id}','cartsController@down_qty')->name('down_qty');
    route::get('delete/{customer_id}/{product_id}','cartsController@delete')->name('delete_from_cart');
});

route::group(['prefix'=>'frontend/customers/','namespace'=>'frontend'],function(){
    route::get('sign_in', 'customersController@sign_in')->name('customers.sign_in');
    route::post('sign_in', 'customersController@sign_in_post')->name('customers.sign_in_post');
    route::get('sign_up', 'customersController@sign_up')->name('customers.sign_up');
    route::post('sign_up', 'customersController@sign_up_post')->name('customers.sign_up_post');
    route::get('log_out', 'customersController@log_out')->name('customers.log_out')->middleware('customers');
});

route::group(['prefix'=>'frontend/favorites/','namespace'=>'frontend','middleware'=>'customers'],function(){
    route::get('list','favoritesController@list')->name('front.favorites.list');
    route::get('add/{customer_id}/{product_id}','favoritesController@add')->name('add_to_fav');
    route::get('delete/{customer_id}/{product_id}','favoritesController@delete')->name('delete_from_fav');
});

route::group(['prefix'=>'frontend/shipping/','namespace'=>'frontend'],function(){
    route::get('list','shippingController@list')->name('front.shipping.list')->middleware('users');
    route::post('add','shippingController@add')->name('front.shipping.add')->middleware('customers');
    route::post('edit','shippingController@edit')->name('front.shipping.edit')->middleware('customers');
});

route::group(['prefix'=>'frontend/orders/','namespace'=>'frontend','middleware'=>'customers'],function(){
    route::get('list','ordersController@list');
});

//==================configorations========================>
Route::get('/clear-cache', function() {
     Artisan::call('cache:clear');
     Artisan::call('route:clear');
     Artisan::call('view:clear');
     Artisan::call('clear-compiled');
     Artisan::call('config:clear');
     Artisan::call('optimize:clear');
     Artisan::call('optimize');
     Artisan::call('config:cache');
     Artisan::call('route:cache');
    // return what you want
});

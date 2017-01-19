<?php

//DASHBOARD//
Route::get('cms/dashboard','CmsController@dashboard');
Route::resource('cms/menu', 'MenuController');
Route::resource('cms/content', 'ContentController');
Route::resource('cms/categories', 'CategoriesController');
Route::resource('cms/products', 'ProductsController');
Route::resource('cms/orders', 'CmsController@orders');
Route::resource('cms/users', 'UserCmsController');

//USER//
Route::get('user/signin','UserController@signin');
Route::post('user/signin','UserController@postSignin');
Route::get('user/signup','UserController@signup');
Route::post('user/signup','UserController@postSignup');
Route::get('user/logout','UserController@logout');
Route::get('user/user','UserController@user');
Route::get('user/edit','UserController@editUser');
Route::post('user/changeUser','UserController@postEditUser');
Route::get('user/changepassword','UserController@editPass');


//SHOP//
Route::get('shop','ShopController@categories');
Route::get('shop/clear-cart','ShopController@clearCart');
Route::get('shop/add-to-cart','ShopController@addToCart');
Route::get('shop/remove-from-cart','ShopController@removeFromCart');
Route::get('shop/update-cart','ShopController@updateCart');
Route::get('shop/checkout','ShopController@checkout');
Route::get('shop/order','ShopController@order');
Route::get('shop/search','ShopController@getSearchProducts');
Route::get('shop/{category_url}','ShopController@products');
Route::get('shop/{category_url}/{product_url}','ShopController@item');

//PAGES//
Route::get('/','PagesController@home');
Route::get ('{url}', 'PagesController@boot');


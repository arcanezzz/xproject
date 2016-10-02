<?php


//CMS

Route::get('cms/dashboard','CmsController@index');
Route::resource('cms/menu','MenuController');
Route::resource('cms/content','ContentController');

//shop
Route::get('shop','ShopController@cat');
Route::get('shop/checkout','ShopController@checkout');
Route::get('shop/clear-cart','ShopController@clearCart');
Route::get('shop/add-to-cart','ShopController@addToCart');
Route::get('shop/order','ShopController@order');
Route::get('shop/update-cart','ShopController@updateCart');
Route::get('shop/{category_url}','ShopController@products');
Route::get('shop/{category_url}/{product_url}','ShopController@item');

//user
Route::controller('user','UserController');

//pages
Route::get('/','PagesController@index');
Route::get('{url}','PagesController@boot');
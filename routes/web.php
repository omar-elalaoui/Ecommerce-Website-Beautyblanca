<?php


Route::get('/', 'FrontHomeController@index');
Route::resource('/produits', 'FrontProduitsController');
Route::resource('/commande', 'FrontCommandeController');
Route::post('/cart/add', 'FrontCartController@add');
Route::get('/cart/delete/{id}', 'FrontCartController@delete');
Route::get('/cart/delete_in_checkout/{id}', 'FrontCartController@delete_in_checkout');
Route::get('/order_done', 'FrontCommandeController@order_done');
Route::resource('/front/order', 'FrontCommandeController');


Route::get('admin', 'AdminHomeController@index');
Route::get('admin/produits/delete/{id}', 'AdminProduitsController@destroy');
//Route::put('produits/{id}', 'AdminProduitsController@update');
Route::resource('admin/produits', 'AdminProduitsController');
Route::resource('admin/orders', 'AdminOrderController');

Auth::routes(['register' => false]);

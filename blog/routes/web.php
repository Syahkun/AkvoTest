<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

Route::get("api/shops", 'ShopsController@index');
Route::get("api/shops/{shop_id}", 'ShopsController@show');
Route::get("api/products", 'ProductsController@index');
Route::get("api/products/{product_id}", 'ProductsController@show');



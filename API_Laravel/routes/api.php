<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/products/{id}', 'ProductController@show');

Route::post('/products/updatePrice/{id}', 'ProductController@update');

Route::get('/doNothing', "ProductController@doNothing");

Route::get('/getAll/resource', 'ProductController@getAllResource');

Route::get('/getAll/collection', 'ProductController@getAllCollection');

// Route::get('/relatedProduct/{productID}', 'RelatedProductController@getRelatedProduct')->name('getRelatedProduct');
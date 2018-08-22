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

Route::get('/products/{id}', 'APIControllers\ApiProductController@show');

Route::post('/products/updatePrice/{id}', 'APIControllers\ApiProductController@update');

Route::get('/doNothing', "APIControllers\ApiProductController@doNothing");

Route::get('/getAll/resource', 'APIControllers\ApiProductController@getAllResource');

Route::get('/getAll/collection', 'APIControllers\ApiProductController@getAllCollection');

// Route::get('/relatedProduct/{productID}', 'APIControllers\ApiRelatedProductController@getRelatedProduct')->name('getRelatedProduct');
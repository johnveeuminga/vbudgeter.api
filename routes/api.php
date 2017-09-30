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
	$store;
	$user = $request->user();
	if($user->usertype_id == 1){
		$store = $user->store;
		$store->vegetables;
	}else{
		$store = null;
	}
    return response()->json(['user'=>$user, 'store'=>$store]);
});

Route::resource('/users', 'UserController');
Route::resource('/stores', 'StoreController');
Route::resource('/orders', 'OrderController');
Route::resource('/vegetables', 'VegetableController');

Route::get('/stores/{id}/orders', 'StoreController@getOrdersByStore');
Route::put('/stores/{id}/setLocation', 'StoreController@setLocation');
Route::get('/users/{user}/getStore', 'UserController@getStore');
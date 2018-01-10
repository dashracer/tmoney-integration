<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'TMoney'], function () {
    Route::get('/access_token', 'GeneralController@getAccessToken');
    Route::get('/email_check/{email}', 'GeneralController@emailCheck');
    Route::get('/email_verification/{activationCode}', 'GeneralController@emailVerification');
    Route::post('/my_profile', 'GeneralController@myProfile');
});

<?php

use Illuminate\Http\Request;
use App\Http\Resources\UserCollection;
use App\User;

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

Route::post('/login', 'AuthenticationController@login')->name('login');

Route::middleware('auth:api')->group(function(){
    Route::get('/logout', 'AuthenticationController@logout')->name('logout');
});

Route::get('/users', function(){
    return new UserCollection(User::all());
});

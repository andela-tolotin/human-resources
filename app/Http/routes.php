<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});

 Route::group(['prefix' => '/auth', 'middleware' => ['web']], function () {
        Route::post('/register', 'Auth\AuthController@postRegister');
        Route::post('/login', 'Auth\AuthController@loginUser');
});

/*
 * This route belongs to dashboard
 */
Route::group(['prefix' => '/dashboard', 'middleware' => ['web']], function () {

    Route::get('/', function(){
        return view('dashboard.index');
    });

    Route::get('/logout', 'Auth\AuthController@logUserOut');

    Route::get('/profile', function () {
        return view('dashboard.pages.view_myprofile');
    });
});

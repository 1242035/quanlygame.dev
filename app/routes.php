<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// admin domain
/*Route::group(array("domain" => "admin.quanlygame.dev"), function()
{
    require_once app_path() . '/route/admin.php';
});*/
// User action routes
Route::get('register', 'UsersController@create');
Route::post('users/list', 'UsersController@store');
Route::get('login', 'UsersController@login');
Route::post('login', 'UsersController@doLogin');
Route::get('confirm/{code}', 'UsersController@confirm');
Route::get('forgot/password', 'UsersController@forgotPassword');
Route::post('forgot/password', 'UsersController@doForgotPassword');
Route::get('reset/password/{token}', 'UsersController@resetPassword');
Route::post('reset/password', 'UsersController@doResetPassword');
Route::get('logout', 'UsersController@logout');
require_once app_path() . '/route/site.php';
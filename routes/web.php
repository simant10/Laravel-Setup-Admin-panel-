<?php

//use App\Http\Controllers\Auth\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/*Route::get('login', [
    '/' => 'LoginController@index'
]);*/
Route::get('/', 'LoginController@index');
Route::any('/login/login', 'LoginController@loginEvent');

Route::prefix('dashboard')->group(function () {
    Route::get('/', 'DashboardController@index');
    
});
Route::prefix('state')->group(function () {
    Route::get('/statelist', 'StateController@index');
    
});
Route::prefix('city')->group(function () {
    Route::get('/citylist', 'CityController@index');
    
});
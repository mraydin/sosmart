<?php

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


use App\Devices;

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index');
Route::get('/file', 'HomeController@get_file');
Route::get('/files', function (){

    return Devices::all();

})->name('device');

Route::group(['prefix'=>'admin','middleware'=>'admin'],function () {

    Route::get('logout', 'Auth\LoginController@logout');
    Route::get('/', 'HomeController@get_admin');
    Route::get('/real', 'HomeController@realtime');
    Route::resource('itemPost', 'PostController');

});
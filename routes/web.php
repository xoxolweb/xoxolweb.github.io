<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

use Illuminate\Support\Facades\Auth;

/*Route::get('/', function () {
    return view('welcome');
});*/



Auth::routes();

Route::group(['prefix'=>'admin'],function(){
    Route::get('/', 'AdminController@index')->name('adminRoute');
    Route::post('edit={$id}','AdminController@edit');
    Route::post('/add','AdminController@add');
});

Route::get('/{category}-{id}','IndexController@detail');
Route::get('/{category}','IndexController@category');

Route::get('/', 'IndexController@index')->name('main');
Route::any('/register','IndexController@index');

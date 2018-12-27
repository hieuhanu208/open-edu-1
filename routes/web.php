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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'login','middleware'=> 'CheckLogedIn'], function () {
    Route::get('/', 'LoginController@getLogin')->name('login');
    Route::post('/','LoginController@postLogin');
});



Route::group(['prefix' => 'admin','middleware' => 'CheckLogedOut'], function () {
    Route::get('/', 'AdminController@getAdmin')->name('dashboard');
    Route::get('/logout','AdminController@getLogout')->name('logout');
});

Route::group(['prefix' => 'category'], function () {
    Route::get('/', 'CategoryController@getCate')->name('category'); 
     Route::get('edit','CategoryController@editCate');
});



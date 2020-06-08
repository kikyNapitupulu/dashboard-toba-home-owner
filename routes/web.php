<?php

use Illuminate\Support\Facades\Route;

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
    return view('admin.dashboard');
});

/*Route::get('/login','AuthController@login')->name('login');
Route::POST('/post/login','AuthController@postlogin');
Route::get('/logout','AuthController@logout');*/

Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard','AdminController@dashboard');
    //Route::get('/dashboard','DashboardController@homestay');

    Route::get('homestay','HomestayController@homestay');
    Route::get('/homestay/{id}/view','HomestayController@view');
    Route::POST('/homestay/create','HomestayController@create');
    Route::get('/homestay/{id}/edit','HomestayController@edit');
    Route::POST('/homestay/{id}/update','HomestayController@update');
    Route::get('/homestay/{id}/delete','HomestayController@delete');

    Route::get('booking','BookingController@booking');
    Route::get('/booking/{id}/view','BookingController@view');

    Route::get('type','TypeController@type');
    Route::get('/type/{id}/view','TypeController@view');
    Route::post('/type/create','TypeController@create');
    Route::get('/type/{id}/edit','TypeController@edit');
    Route::post('/type/{id}/update','TypeController@update');
    Route::get('/type/{id}/delete','TypeController@delete');

    Route::get('facilities','FacilitiesController@facilities');
    Route::get('/facilities/{id}/view','FacilitiesController@view');
    Route::POST('/facilities/create','FacilitiesController@create');
    Route::get('/facilities/{id}/edit','FacilitiesController@edit');
    Route::POST('/facilities/{id}/update','FacilitiesController@update');
    Route::get('/facilities/{id}/delete','FacilitiesController@delete');

    Route::get('/akun/{id}/view','AkunController@view');
    Route::get('/profil/{id}/edit','AkunController@edit');
    Route::post('/profil/{id}/update','AkunController@update');
    Route::get('visitor','AkunController@show_visitor');
    Route::post('/visitor/create','AkunController@create');
    Route::get('/visitor/{id}/delete','AkunController@delete');
    Route::get('/visitor/{id}/detail','AkunController@detail');
    Route::get('/visitor/{id}/edit','AkunController@edit');
    Route::POST('/visitor/{id}/update','AkunController@update');

    Route::get('review','ReviewController@index');
    Route::get('/review/{id}/edit','ReviewController@edit');
    Route::POST('/review/{id}/update','ReviewController@update');
 
});
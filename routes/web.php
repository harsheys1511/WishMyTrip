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

Route::get('/index','IndexController@index');
Route::get('/AboutUs','AboutUsController@index');
Route::get('/Accessorie','AccessorieController@index');
Route::get('/Careers','CareersController@index');
Route::get('/ContactUs','ContactUsController@index');
Route::get('/Hotels','HotelsController@index');
Route::get('/Login','LoginController@index');
Route::get('/SignUp','SignUpController@index');
Route::post('/SignUp','SignUpController@store');
Route::get('/Places','PlacesController@index');
Route::get('/Result','ResultController@index');
Route::get('/CruiseInfo','CruiseInfoController@index');
Route::get('/Thanks','ThanksController@index');

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
    return view('home');
});

//Post Methods
//Route::post('/signup', 'SignupController@signup');
Route::post('/checkIfPasswordExit', 'CheckIfPasswordExit@check');
Route::post('/signup', 'SignupController@signup');
Route::post('/login', 'LoginController@login');
Route::post('/account', 'AccountController@account');
Route::post('/listP', 'ListingPropertyController@list');
Route::post('/reqProp', 'PostRequestController@myrequest');
Route::post('/searchBD', 'searchDBController@search');
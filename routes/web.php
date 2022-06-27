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




Route::group(array('middleware' => 'guest'), function() {
    Route::get('/', [ 'as' => 'login', 'uses' => 'App\Http\Controllers\LoginController@login']);
    Route::post('/', 'App\Http\Controllers\LoginController@loginSubmit');
});


Route::group(array('middleware' => 'auth'), function() {

    Route::get('/logout', 'App\Http\Controllers\HomeController@logout');
    Route::get('/home', 'App\Http\Controllers\HomeController@home');
    
    Route::get('/users', 'App\Http\Controllers\UsersController@index');
    Route::get('/users/add', 'App\Http\Controllers\UsersController@add');
    Route::post('/users/add', 'App\Http\Controllers\UsersController@addSubmit');
    Route::get('/users/edit/{id}', 'App\Http\Controllers\UsersController@edit');
    Route::post('/users/edit/{id}', 'App\Http\Controllers\UsersController@editSubmit');
    Route::get('/users/remove/{id}', 'App\Http\Controllers\UsersController@remove');
    
    // Borrowers
    Route::get('/borrowers', 'App\Http\Controllers\BorrowersController@index');
    Route::get('/borrowers/add', 'App\Http\Controllers\BorrowersController@add');
    Route::post('/borrowers/add', 'App\Http\Controllers\BorrowersController@addSubmit');
    Route::get('/borrowers/edit/{id}', 'App\Http\Controllers\BorrowersController@edit');
    Route::post('/borrowers/edit/{id}', 'App\Http\Controllers\BorrowersController@editSubmit');
    Route::get('/borrowers/view/{id}', 'App\Http\Controllers\BorrowersController@view');
    Route::get('/borrowers/create/invoice/{id}', 'App\Http\Controllers\BorrowersController@createInvoice');
    Route::post('/borrowers/create/invoice/{id}', 'App\Http\Controllers\BorrowersController@createInvoiceSubmit');
    Route::get('/borrowers/create/newloan/{id}', 'App\Http\Controllers\BorrowersController@createNewloan');
    Route::post('/borrowers/create/newloan/{id}', 'App\Http\Controllers\BorrowersController@createNewloanSubmit');
    Route::get('/borrowers/invoice/view/{id}', 'App\Http\Controllers\BorrowersController@viewInvoice');
    
    // Donors
    Route::get('/landers', 'App\Http\Controllers\LandersController@index');
    Route::get('/landers/add', 'App\Http\Controllers\LandersController@add');
    Route::post('/landers/add', 'App\Http\Controllers\LandersController@addSubmit');
    Route::get('/landers/view/{id}', 'App\Http\Controllers\LandersController@view');
    Route::get('/landers/create/invoice/{id}', 'App\Http\Controllers\LandersController@createInvoice');
    Route::post('/landers/create/invoice/{id}', 'App\Http\Controllers\LandersController@createInvoiceSubmit');
    Route::get('/landers/invoice/view/{id}', 'App\Http\Controllers\LandersController@viewInvoice');
    
    Route::get('/settings', 'App\Http\Controllers\HomeController@settings');
    Route::post('/settings', 'App\Http\Controllers\HomeController@settingsSubmit');
    
    Route::get('/gift-ads', 'App\Http\Controllers\HomeController@giftAds');
    Route::post('/gift-ads', 'App\Http\Controllers\HomeController@giftAdsSubmit');
    
});

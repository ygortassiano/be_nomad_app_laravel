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

/*Route::get('/', function () {
    return view('welcome');
});
*/
Auth::routes();

// Home 
Route::get('/', 'HomeController@index');

Route::get('/home', 'HomeController@index')->name('home');


// UserLogin
//Route::get('/login', 'LoginController@index');

// UserRegister
//Route::get('/register', 'RegisterController@index');

// PartnerLogin
//Route::get('/partner/login', 'PartnerController@login');

// PartnerRegister
//Route::get('/partner/register', 'PartnerController@register');

// DestinationsRegister
Route::get('/destination/add', 'DestinationsController@register');

// Destinations - Grid
//Route::get('/list/destinations/type/{type}/place/{place}/date/{date}', 'DestinationsController@index');
Route::post('/list', 'DestinationsController@show_list');
Route::get('/list', 'DestinationsController@index');
Route::get('/list/{id}', 'DestinationsController@show');


// DestinationDetails
//Route::get('/destination/{id}', 'DestinationsController@index');

// Checkout
//Route::get('/benomadcheckout', 'CheckoutController@index');

// UserProfile
//Route::get('/UserProfile', 'UserController@index');

// PartnerProfile
//Route::get('/regisPartnerProfile', 'PartnerController@index');



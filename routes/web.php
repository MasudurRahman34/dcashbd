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
//user
Route::get('/user', 'backend\userController@index')->name('user')->middleware('verified');
Route::get('/buy', 'backend\userController@buy')->name('buy');
Route::get('/sell', 'backend\userController@sell')->name('sell');
Route::get('/exchange', 'backend\userController@exchange')->name('exchange');
Route::get('/transaction', 'backend\userController@transaction')->name('transaction');
Route::get('/profile', 'backend\userController@profile')->name('profile');

//admin
Route::get('/dsadmin', 'backend\adminController@index')->name('dsadmin');
	//currency
	Route::get('/currency', 'backend\adminController@currency')->name('currency');
	Route::post('/currency', 'backend\CurrencyController@store')->name('currency.store');
	//
	//payment Method
	Route::get('/paymentMethod', 'backend\adminController@paymentMethod')->name('paymentMethod');
	Route::post('/paymentMethod', 'backend\PaymentmethodController@store')->name('paymentMethod.store');
	//

Route::get('/trnRequest', 'backend\adminController@trnRequest')->name('trnRequest');
Route::get('/userlist', 'backend\adminController@userlist')->name('userlist');
Route::get('/adminlist', 'backend\adminController@adminlist')->name('adminlist');
Route::get('/adminProfile', 'backend\adminController@profile')->name('adminProfile');
Route::get('/notice', 'backend\adminController@notice')->name('notice');

Auth::routes(['verify' => true]);
Route::POST('/userlogout', 'auth\LoginController@userlogout')->name('userlogout');


Route::get('/home', 'HomeController@index')->name('home');

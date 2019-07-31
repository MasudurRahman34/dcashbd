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
//frontend
Route::get('/d', 'frontend\frontController@index')->name('dcash');

//
//user
Route::get('/user', 'backend\userController@index')->name('user')->middleware('verified');
Route::get('/buy', 'backend\userController@buy')->name('buy');
Route::get('/sell', 'backend\userController@sell')->name('sell');
Route::get('/exchange', 'backend\userController@exchange')->name('exchange');
Route::get('/transaction', 'backend\userController@transaction')->name('transaction');
Route::post('/transaction/store', 'backend\TransactionController@store')->name('transaction.store');
Route::get('/profile', 'backend\userController@profile')->name('profile');

//admin
Route::get('/dsadmin', 'backend\adminController@index')->name('dsadmin');
	//currency
	Route::get('/currency', 'backend\adminController@currency')->name('currency');
	Route::post('/currency', 'backend\CurrencyController@store')->name('currency.store');
	Route::post('/currency/{id}', 'backend\CurrencyController@edit')->name('currency.edit');
	//
	//payment Method
	Route::get('/paymentMethod', 'backend\adminController@paymentMethod')->name('paymentMethod');
	Route::post('/paymentMethod', 'backend\PaymentmethodController@store')->name('paymentMethod.store');
	Route::post('/paymentMethod/{id}', 'backend\PaymentmethodController@edit')->name('paymentMethod.edit');
	//
	//user list
	Route::get('/userProfile/{id}', 'backend\adminController@userProfile')->name('userProfile');


Route::get('/trnRequest', 'backend\adminController@trnRequest')->name('trnRequest');
Route::post('/trn/changeStatus/{id}', 'backend\adminController@trnsStatus')->name('trns.status');
Route::get('/userlist', 'backend\adminController@userlist')->name('userlist');
Route::get('/adminlist', 'backend\adminController@adminlist')->name('adminlist');
Route::get('/adminProfile', 'backend\adminController@profile')->name('adminProfile');
//notice
Route::get('/notice', 'backend\adminController@notice')->name('notice');
Route::post('/notice/store', 'backend\NoticeController@store')->name('notice.store');
Route::get('edit/notice/{id}', 'backend\NoticeController@edit')->name('notice.edit');
Route::post('update/notice/{id}', 'backend\NoticeController@update')->name('notice.update');
Route::post('/notice/delete/{id}', 'backend\NoticeController@destroy')->name('notice.delete');
//end

Auth::routes(['verify' => true]);
Route::POST('/userlogout', 'auth\LoginController@userlogout')->name('userlogout');


Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();


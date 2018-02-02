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

Route::get('/', 'HomeController@landingPage');

Auth::routes();

Route::get('/alternatelogin', 'HomeController@loginBackdoor');

Route::post('/validate/referral', 'SignUpController@validateReferral')->name('validate_referral');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/signup', 'SignUpController@signup')->name('signup');
Route::get('/download', 'MinerClientController@download');

Route::get('/stats', 'StatsController@getStats');

Route::get('/download/mac', 'MinerClientController@downloadMacMiner');
Route::get('/download/mac/instruction', function(){
	return view('mac-installation-instruction');
});
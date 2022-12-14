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

Route::get('/truncateData', function() {
	DB::statement('SET FOREIGN_KEY_CHECKS=0;');
	DB::table('casis')->truncate();
	DB::table('users')->truncate();
	DB::statement('SET FOREIGN_KEY_CHECKS=1;');
	return view('welcome');
});

Route::get('/', function () {
	if(!(Auth::check())){
		return view('auth/login');
	}return redirect('home');    
});
Route::get('home', function() {
	if(Auth::check()){
		return view('User/dashboard');
	}return redirect('/');
});
Route::get('export', 'UserController@export');
Route::resource('user' , 'UserController');
Route::resource('casis', 'CasisController');

// Auth::routes();
Route::post('/', [
  'as' => 'login',
  'uses' => 'Auth\LoginController@login'
]);
Route::post('logout', [
  'as' => 'logout',
  'uses' => 'Auth\LoginController@logout'
]);

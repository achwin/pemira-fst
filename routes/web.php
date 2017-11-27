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

Route::group(['middleware' => ['guest']], function () {
Route::get('/test_password/{nim}', 'RandPasswordController@get_random_password');
Route::get('/login', [
	'as'   => 'login',
	'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('/login', [
	'as'   => 'loginAction',
	'uses' => 'Auth\LoginController@loginAction']);
});

Route::group(['middleware' => ['auth']], function () {
	Route::get('/', [
		'as'   => 'index.vote',
		'uses' => 'VoteController@index']);

	Route::get('/clean_db', [
		'as'   => 'cleandb',
		'uses' => 'Auth\CleanDbController@index']);

	Route::get('/logout', [
		'as'   => 'logout',
		'uses' => 'Auth\LoginController@logout']);

	Route::get('/register', [
	'as'   => 'register',
	'uses' => 'Auth\RegisterController@showRegisterForm']);

	Route::post('/register', [
	'as'   => 'registeraction',
	'uses' => 'Auth\RegisterController@createUser']);

	Route::post('/vote', [
	'as'   => 'voteaction',
	'uses' => 'VoteController@vote']);

});

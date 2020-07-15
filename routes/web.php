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


//Auth::logout();
Route::get('/', [ 'as' => 'login', 'uses' => 'Auth\LoginController@login']);
Route::view('/sign_up', 'auth/sign_up');
Route::get('/logout','Auth\LoginController@logout');
Route::post('/login','Auth\LoginController@authenticate');

Route::post('/users','UsersController@store');
Route::view('/500','errors.500');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/home','HomeController@index');
    Route::view('/profile','users.profile');
    Route::post('/profile','UsersController@update');

    Route::get('/users','UsersController@index');
    Route::get('/users/edit/{id}','UsersController@edit');
    Route::get('/company','CompaniesController@index');
});
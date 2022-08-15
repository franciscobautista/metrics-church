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
    Route::get('/profile/{section?}','UsersController@show');

    Route::get('/users','UsersController@index');
    Route::get('/users/delete/{id}','UsersController@destroy');
    Route::get('/users/edit/{user}','UsersController@edit');
    Route::patch('/users/update/{user}','UsersController@update');
    Route::get('/users/permissions/{user}','UsersController@permissions');
    Route::patch('/users/permissions/{user}','UsersController@updatePermissions');    
    Route::get('/users/new','UsersController@create');
    Route::post('/users','UsersController@store');
    Route::post('/users/password','UsersController@changePassword');

    Route::get('/settings/{section}','OrganizationsController@edit');
    Route::get('/servicetimes/create','ServiceTimesController@create');
    Route::get('/company','CompaniesController@index');

    Route::get('/categories_','CategoriesController@index');
    Route::get('/categories/delete/{id}','CategoriesController@destroy');
    Route::post('/categories','CategoriesController@store');
    Route::patch('/categories/{category}','CategoriesController@update');
    Route::get('/categories/edit/{category}','CategoriesController@edit');
    Route::view('/categories/create','categories.new');

    Route::get('/subcategories/delete/{id}','SubcategoriesController@destroy');
    Route::post('/subcategories','SubcategoriesController@store');
    Route::patch('/subcategories/{subcategory}','SubcategoriesController@update');
    Route::get('/subcategories/edit/{subcategory}','SubcategoriesController@edit');
    Route::get('/subcategories/create','SubcategoriesController@create');

    Route::post('/servicetimes/store','ServiceTimesController@store');
    Route::get('/servicetimes/delete/{id}','ServiceTimesController@destroy');
    Route::get('/servicetimes/edit/{service}','ServiceTimesController@edit');
    Route::patch('/servicetimes/update/{service}','ServiceTimesController@update');

    Route::post('/servicetypes/store','ServiceTypesController@store');
    Route::get('/servicetypes/create','ServiceTypesController@create');
    Route::get('/servicetypes/delete/{id}','ServiceTypesController@destroy');
    Route::get('/servicetypes/edit/{service}','ServiceTypesController@edit');
    Route::patch('/servicetypes/update/{service}','ServiceTypesController@update');
});
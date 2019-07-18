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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/about', 'PublicController@about');
Route::get('/cars', 'PublicController@showCars');
Route::get('/services', 'PublicController@services');
Route::get('/team', 'PublicController@team');

Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    Route::view('/admin', 'admin.dashboard');
    Route::get('/car', 'CarController@showCars');
    Route::get('/modification', 'CategoryController@get');
    Route::get('/accessory', 'CompanyController@get');
    Route::get('/addCar', 'CarController@showCarForm');
    Route::view('/addCategory', 'admin.addCategory');
    Route::view('/addCompany', 'admin.addCompany');
    Route::post('/addCar/{id}', 'CarController@addOrUpdateCar');
    Route::post('/updateProduct/{id}', 'ProductController@update');
    Route::get('/deleteProduct/{id}', 'ProductController@delete');
    Route::post('/addCategory', 'CategoryController@add');
    Route::post('/updateCategory/{id}', 'CategoryController@update');
    Route::get('/deleteCategory/{id}', 'CategoryController@delete');
    Route::post('/addCompany', 'CompanyController@add');
    Route::post('/updateCompany/{id}', 'CompanyController@update');
    Route::get('/deleteCompany/{id}', 'CompanyController@delete');
});


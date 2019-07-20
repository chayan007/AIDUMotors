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
Route::get('/contact', 'PublicController@contact');

Route::group( ['middleware' => 'auth' ], function()
{
    Route::get('logout', 'Auth\LoginController@logout')->name('logout');
    Route::view('/admin', 'admin.dashboard');
    Route::get('/car', 'CarController@showCars');
    Route::get('/image', 'MediaController@showImages');
    Route::get('/media', 'MediaController@showMedia');
    Route::get('/review', 'ReviewController@showReview');
    Route::get('/deleteImage/{id}', 'MediaController@deleteImage');
    Route::get('/deleteMedia/{id}', 'MediaController@deleteMedia');
    Route::get('/deleteReview/{id}', 'ReviewController@deleteReview');
    Route::get('/modification', 'CategoryController@get');
    Route::get('/accessory', 'CompanyController@get');
    Route::get('/addCar', 'CarController@showCarForm');
    Route::get('/addImage', 'MediaController@showImageForm');
    Route::get('/addMedia', 'MediaController@showMediaForm');
    Route::post('/addImage/{id}', 'MediaController@addImage');
    Route::post('/addMedia/{id}', 'MediaController@addMedia');
    Route::post('/addReview/{id}', 'ReviewController@addOrUpdateReview');
    Route::post('/addCar/{id}', 'CarController@addOrUpdateCar');
});


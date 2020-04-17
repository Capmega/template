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

// Route::get('/', function () {
//     return view('front.welcome');
// });
// Route::get('/test', function () {
//     return view('test');
// });

Auth::routes();

// Front routes
Route::namespace('Front')
->group(function () {
    Route::get('/', 'HomeController@index')->name('home');
});

// Admin routes
Route::prefix('admin')
->middleware(['web', 'auth'])
->namespace('Admin')
->group(function () {
    Route::get('/'          , 'DashboardController@index')->name('dashboard');
    Route::get('/my-profile', 'UserController@myProfile')->name('my-profile');
    Route::post('/my-profile', 'UserController@myProfile')->name('my-profile');

    Route::middleware(['role:super-admin'])->group(function () {
        Route::resource('/user' , 'UserController');
    });
});

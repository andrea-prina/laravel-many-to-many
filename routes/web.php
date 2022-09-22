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

Route::get('/', function () {
    return view('guest.welcome');
});

Auth::routes();

Route::middleware('auth')
    // Update the folder containing the Controllers
    ->namespace('Admin')
    // Update the name of each subroute with a prefix
    ->name('admin.')
    // Update each url by adding the prefix/
    ->prefix('admin')
    // Group all the routes in that folder
    ->group(function() {
        Route::get('/', 'HomeController@index')->name('home'); // --> the Route '/admin' with name 'admin.home'
        Route::resource('/posts', 'PostController');
        Route::resource('/categories', 'CategoryController');
    });

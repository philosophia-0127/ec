<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\LineItemController;
use App\Http\Controllers\CartController;

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
//     return view('welcome');
// });

Route::name('home.')
    ->group(function() {
        Route::get('/', 'HomeController@top')
            ->name('top');

        Route::get('/about', 'HomeController@about')
            ->name('about');
    });


Auth::routes();

Route::get('/home', 'HomeController@index')
    ->name('home');

Route::name('product.')
    ->group(function() {
        Route::get('/products', 'ProductController@index')
            ->name('index');

        Route::get('/products/{id}', 'ProductController@show')
            ->name('show');
    });

Route::name('line_item.')
    ->group(function() {
        Route::post('/line_item/create', 'LineItemController@create')
            ->name('create');
    });

Route::name('cart.')
    ->group(function () {
        Route::get('/cart', 'CartController@index')
            ->name('index');
});

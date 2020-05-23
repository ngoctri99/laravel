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

Route::get('/', 'HomeController@home')->name('home');
Route::get('san-pham', 'ProductController@index')->name('product.index');
Route::prefix('admin')->namespace('Admin')->group( function() {
    Route::get('/', 'AdminController@index')->name('admin.index');
    Route::get('dashboard', 'AdminController@dashboard')->name('admin.dashboard');
});

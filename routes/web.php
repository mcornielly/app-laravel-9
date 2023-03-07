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
    return view('welcome');
});

Route::view('/', 'Welcome')->name('home');
Route::view('/contact', 'Contact')->name('contact');
Route::view('/blog', 'Blog')->name('blog');
Route::view('/about', 'About')->name('about');

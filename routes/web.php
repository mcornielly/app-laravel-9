<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

// $posts = [
//     ['title' => 'First Post'],
//     ['title' => 'Second Post'],
//     ['title' => 'Third Post'],
//     ['title' => 'Fourth Post']
// ];

Route::get('/', function () {
    return view('welcome');
});

Route::view('/', 'Welcome')->name('home');
Route::view('/contact', 'Contact')->name('contact');
Route::get('/blog', [PostController::class, 'index'])->name('blog');
// Route::view('/blog', 'Blog', ['posts' => $posts])->name('blog');
Route::view('/about', 'About')->name('about');

// Route::get('/blog', function() {

//     $posts = [
//         ['title' => 'First Post'],
//         ['title' => 'Second Post'],
//         ['title' => 'Third Post'],
//         ['title' => 'Fourth Post']
//     ];

//     return view('blog', ['posts' => $posts]);

// })->name('blog');

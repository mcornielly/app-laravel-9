<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
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


// Route::get('/blog', [PostController::class, 'index'])->name('posts.index');
// Route::get('/blog/crear', [PostController::class, 'create'])->name('posts.create');
// Route::post('/blog', [PostController::class, 'store'])->name('posts.store');
// Route::get('/blog/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');
// Route::patch('/blog/{post}', [PostController::class, 'update'])->name('posts.update');
// Route::delete('/blog/{post}', [PostController::class, 'destroy'])->name('posts.delete');
// Route::view('/blog', 'Blog', ['posts' => $posts])->name('blog');

Route::resource('/blog', PostController::class, [
    'names' => 'posts',
    'parameters' => ['blog' => 'post']
]);


Route::view('/about', 'About')->name('about');
Route::view('/register', 'auth.register')->name('register');
Route::post('/register', [RegisteredUserController::class, 'store'])->name('register');
Route::view('/login', 'auth.login')->name('login');
Route::post('/login', [AuthenticatedSessionController::class, 'store'])->name('login');
Route::get('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');
Route::get('/blog/{post}/edit', [PostController::class, 'edit'])->name('posts.edit');


// Route::get('/login', function () {
//     return 'Login page';
// })->name('login');

// Route::get('/blog', function() {

//     $posts = [
//         ['title' => 'First Post'],
//         ['title' => 'Second Post'],
//         ['title' => 'Third Post'],
//         ['title' => 'Fourth Post']
//     ];

//     return view('blog', ['posts' => $posts]);

// })->name('blog');

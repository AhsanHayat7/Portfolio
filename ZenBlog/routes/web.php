<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ZenBlogController;
use App\Http\Controllers\DashBoardController;
use App\Http\Controllers\AuthController;
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

//FRONTEND
Route::get('/',[ZenBlogController::class,'index'])->name('index');
Route::get('/about',[ZenBlogController::class,  'about'])->name('about');
Route::get('/category',[ZenBlogController::class, 'category'])->name('category');
Route::get('/search',[ZenBlogController::class, 'search'])->name('search');
Route::get('/single',[ZenBlogController::class, 'single'])->name('single');
Route::get('/contact',[ZenBlogController::class,'contact'])->name('contact');
Route::get('/Login',[ZenBlogController::class, 'login'])->name('login');
Route::get('/register',[ZenBlogController::class, 'register'])->name('register');



//DASHBOARD
Route::get('/table',[DashBoardController::class,'table'])->name('table');


// Guest routes
Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', [AuthController::class, 'log'])->name('log');
    Route::post('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'reg'])->name('reg');
    Route::post('/register', [AuthController::class, 'register'])->name('register');
});

// Authenticated routes
Route::group(['middleware' => 'auth'], function() {
    Route::get('/home', [DashBoardController::class, 'home'])->name('home');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});





//add post
Route::get('/create-post', [PostController::class,'post'])->name('post');
Route::post('/store-post', [PostController::class,'pos'])->name('pos');


//update and delete post
Route::get('/post/update/{id}',[PostController::class, 'update'])->name('update');
Route::get('/post/delete/{id}',[PostController::class,'delete'])->name('delete');

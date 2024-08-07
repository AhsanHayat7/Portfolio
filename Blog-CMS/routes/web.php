<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use App\Models\Profile;
use Database\Seeders\UsersTableSeeder;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\SettingsController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/test',function(){
//     return Post::find(8)->category;
// });

// Route::get('/test',function(){
//     return Category::find(5)->post;
// });


// Route::get("/test", function () {
//     return Tag::find(4)->posts;
// });

// Route::get("/test", function () {
//     return Post::find(13)->tags;
// });
Route::get('/', function () {
    return view('welcome');
});

// Route::get("/test", function () {
//     return User::find(1)->profile;
// });

Route::get("/test", function () {
    return Profile::find(1)->user;
});


Auth::routes();

Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/post/create', [PostController::class, 'create'])->name('post.create');

    Route::post('/post/store', [PostController::class, 'store'])->name('post.store');

    Route::get('/category', [CategoryController::class, 'index'])->name('category');
    Route::get('/category/create', [CategoryController::class, 'create'])->name('create.category');
    Route::post('/category/store', [CategoryController::class, 'store'])->name('category.store');
    Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
    Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.delete');
    Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');

    Route::get('/post', [PostController::class, 'index'])->name('post');
    Route::get('/post/delete/{id}', [PostController::class, 'destroy'])->name('post.delete');
    Route::get('/post/trashed', [PostController::class, 'trashed'])->name('post.trashed');
    Route::get('/post/kill/{id}', [PostController::class, 'kill'])->name('post.kill');
    Route::get('/post/restore/{id}',[PostController::class,'restore'])->name('post.restore');
    Route::get('/post/edit/{id}',[PostController::class,'edit'])->name('post.edit');
    Route::post('/post/update/{id}',[PostController::class,'update'])->name('post.update');

    Route::get('/tags',[TagController::class,'index'])->name('tag');
    Route::get('/tag/create',[TagController::class, 'create'])->name('tag.create');
    Route::get('/tags/edit/{id}',[TagController::class,'edit'])->name('tag.edit');
    Route::post('/tags/update/{id}',[TagController::class, 'update'])->name('tag.update');
    Route::get('/tags/delete/{id}',[TagController::class,'destroy'])->name('tag.delete');
    Route::post('/tag/store',[TagController::class, 'store'])->name('tag.store');


    Route::get('/users',[UserController::class,'index'])->name('users');
    Route::get('/user/create',[UserController::class,'create'])->name('user.create');
    Route::post('/user/store',[UserController::class,'store'])->name('user.store');
    Route::get('/user/admin/{id}',[UserController::class, 'admin'])->name('user.admin')->middleware('admin');
    Route::get('/user/not-admin/{id}',[UserController::class,'not_admin'])->name('user.not.admin');


    Route::get('/user/profile',[ProfilesController::class,'index'])->name('user.profile');
    Route::post('/user/profile/update/{id}',[ProfilesController::class,'update'])->name('user.profile.update');
    Route::get('/user/delete/{id}',[ProfilesController::class,'destroy'])->name('user.profile.delete');

    Route::get('/settings',[SettingsController::class,'index'])->name('setting');
    Route::post('/user/settings/update/',[SettingsController::class,'update'])->name('setting.update');
});

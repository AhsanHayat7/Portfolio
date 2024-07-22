<?php

use App\Http\Controllers\CustomController;
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

// Route::get('/', function () {
//     return view('welcome');
// });





//Auth custom login and  Registration


Route::get('/',[CustomController::class,'dashboard'])->name('dashboard');

Route::get('/login',[CustomController::class,'index'])->name('login');

Route::post('/custom-login',[CustomController::class,'customlogin'])->name('login.custom');

Route::get('/registration',[CustomController::class,'registration'])->name('register-user');

Route::post('/custom-registration',[CustomController::class,'customRegistration'])->name('register.custom');


Route::get('/signout',[CustomController::class,'signout'])->name('signout');

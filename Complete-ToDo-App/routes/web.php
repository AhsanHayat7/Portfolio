<?php

use App\Http\Controllers\TodosController;
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

Route::get('/todos',[TodosController::class,'todos'])->name('todos');
Route::post('/create/todos',[TodosController::class, 'create'])->name('made');
Route::get('/todo/delete/{id}',[TodosController::class,'delete'])->name('remove');
Route::get('/todo/update/{id}',[TodosController::class,'update'])->name('change');

Route::post('/todo/save/{id}',[TodosController::class,'save'])->name('save');
Route::get('/todo/completed/{id}',[TodosController::class,'completed'])->name('complete');
Route::get('/todo/uncompleted/{id}',[TodosController::class,'uncompleted'])->name('uncomplete');



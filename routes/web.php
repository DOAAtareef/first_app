<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

Route::get('/', [ HomeController::class ,'index']);
Route::get('/signup',[ HomeController::class ,'signup'])->name('signup');
Route::get('/users',[ UserController::class ,'index'])->name('users.index');
Route::post('/signup',[ HomeController::class ,'signupStore'])->name('signup.store');
Route::get('/users/create',[ UserController::class ,'create'])->name('users.create');
Route::post('/users',[ UserController::class ,'store'])->name('users.store');
Route::delete('/users/{id}',[ UserController::class ,'destroy'])->name('users.destroy');
Route::get('/users/{id}/edit',[ UserController::class ,'edit'])->name('users.edit');
Route::put('/users/{id}',[ UserController::class ,'update'])->name('users.update');
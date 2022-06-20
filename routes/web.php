<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
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

Route::controller(AccountController::class)->group(function(){
    Route::get('/register', 'register')->name('register');
    Route::post('/register', 'registerAction')->name('register.action');
    Route::get('/login', 'login')->name('login');
});

Route::resource('product', ProductController::class);
Route::resource('category', CategoryController::class);
Route::resource('role', RoleController::class);
Route::resource('user', UserController::class);

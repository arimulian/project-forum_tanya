<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ForumController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ProfilController;

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
    return view('layouts.main');
});

Route::get('/login', [LoginController::class, 'login']);
Route::post('/login', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

//profile
Route::get('/profile',[ProfilController::class, 'profile']);


// CRUD Forum
Route::resource('/forum', ForumController::class);
// CRUD Forum_Category
Route::resource('/category', CategoryController::class);

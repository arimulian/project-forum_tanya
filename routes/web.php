<?php

use App\Http\Controllers\AnswerController;
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
*/



Route::get('/', [LoginController::class, 'login']);
Route::post('/', [LoginController::class, 'auth']);
Route::post('/logout', [LoginController::class, 'logout']);
Route::get('/register', [RegisterController::class, 'register']);
Route::post('/register', [RegisterController::class, 'store']);

//proofile
Route::get('/profile', [ProfilController::class, 'profile']);
Route::GET('/add-profile', [ProfilController::class, 'create']);
Route::POST('/add-profile', [ProfilController::class, 'store']);
Route::get("/edit-profile/{id}", [ProfilController::class, 'editprofile']);
Route::post('/edit-profile/{id}', [ProfilController::class, 'editing']);

// CRUD Forum
Route::resource('/forum', ForumController::class);
Route::get('/forum/{id}', [ForumController::class, 'show']);
// CRUD Forum_Category
Route::resource('/category', CategoryController::class);

Route::post('/answer/{id}', [AnswerController::class, 'store']);

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PublicController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/login',[AuthController::class, 'indexLogin'])->name('login');
    Route::post('/login',[AuthController::class, 'authenticating']);
    Route::get('/register',[AuthController::class, 'indexRegister']);
    Route::post('/register',[AuthController::class,'register']);
});

Route::middleware(['auth'])->group(function () {
    Route::get('/logout',[AuthController::class,'logout']);
    Route::get('/books',[BookController::class,'index']);
    Route::get('/home',[PublicController::class,'home']);
    Route::get('/',[PublicController::class,'index']);
    Route::get('/dashboard',[AdminController::class,'index'])->middleware(['Admin']);

});

Route::get('/notactive',function() {
    return view('layouts.inactive');
});
Route::get('/dev',[PublicController::class,'dev']);

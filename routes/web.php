<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;

Route::get('/login',[AuthController::class,'loginPage'])->name('login');
Route::post('/login',[AuthController::class,'login']);

Route::get('/register',[AuthController::class,'registerPage']);
Route::post('/register',[AuthController::class,'register']);

Route::post('/logout',[AuthController::class,'logout']);

Route::get('/dashboard', function(){
    return view('dashboard');
})->middleware('auth');


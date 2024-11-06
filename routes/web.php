<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration/form',[AuthController::class,'loadRegisterForm']);
Route::post('register/user',[AuthController::class,'registerUser'])->name('registerUser');


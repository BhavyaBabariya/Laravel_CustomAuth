<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;


Route::group(['middleware'=>'guest'],function(){ 
    Route::get('/',[AuthController::class,'index'])->name('login');
    Route::post('/',[AuthController::class,'login'])->name('login');
    Route::get('register',[AuthController::class,'register_view'])->name('register');
    Route::post('register',[AuthController::class,'register'])->name('register');
});

Route::group(['middleware'=>'auth'],function(){
    Route::get('home',[AuthController::class,'home'])->name('home');
    Route::get('about',[AuthController::class,'about'])->name('about');
    Route::get('/contact', [AuthController::class, 'showForm'])->name('contact');
    Route::post('/contact', [AuthController::class, 'submitForm'])->name('contact');
    Route::post('logout',[AuthController::class,'logout'])->name('logout');
});
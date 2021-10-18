<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;

Route::get('/', function () {return view('pages.home');})->name('home');

Route::get('/registration',[RegistrationController::class,'registration'])->name('signup');
Route::post('/registration',[RegistrationController::class,'validateRegistration'])->name('signup');
Route::get('/login',[LoginController::class,'login'])->name('login');
Route::post('/login',[LoginController::class,'loginCheck'])->name('login');
Route::get('/contact',[ContactController::class,'contact'])->name('contact');
Route::post('/contact',[ContactController::class,'validateContact'])->name('contact');
Route::get('/user/dash',[DashboardController::class,'dashboard'])->name('dashboard')->middleware('SeekerIsValidCheck');
Route::get('/logout',[LogoutController::class,'logout'])->name('logout');
Route::get('/user/edit',[DashboardController::class,'edituserinfo'])->name('edituserinfo');
Route::post('/user/edit',[DashboardController::class,'userInfoUpdate'])->name('userInfoUpdate');
<?php

use App\Http\Controllers\Front\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about-us', [HomeController::class, 'about'])->name('front.about');
Route::get('/contact-us', [HomeController::class, 'contact'])->name('front.contact');
Route::get('/tour-packages', [HomeController::class, 'tours'])->name('front.tours');
Route::post('/booking', [HomeController::class, 'booking'])->name('front.booking');
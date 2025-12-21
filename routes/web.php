<?php

use App\Http\Controllers\PortfolioController;
use Illuminate\Support\Facades\Route;

// Portfolio Routes (Main Site)
Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::post('/contact', [PortfolioController::class, 'sendContact'])->name('contact.send');
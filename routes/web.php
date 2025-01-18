<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AgentController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\StripePaymentController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MailController;

Route::get('/', [HomeController::class, 'index'])->name('index');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');






Route::get('/about', [HomeController::class, 'showAboutUs'])->name('aboutUs');
Route::get('/faq', [HomeController::class, 'showFaq'])->name('faq');
Route::get('/contact', [HomeController::class, 'showContact'])->name('contact');
Route::get('/watchlist', [HomeController::class, 'showWatchlist'])->name('watchlist');


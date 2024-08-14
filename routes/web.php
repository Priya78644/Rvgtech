<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/email', [HomeController::class, 'email'])->name('email');

Route::get('/details', [HomeController::class, 'details'])->name('detail');

Route::get('/affiliate', [HomeController::class, 'affiliate'])->name('affiliate');

Route::get('/adsens', [HomeController::class, 'adsens'])->name('adsens');

Route::get('/contact', [HomeController::class, 'contact'])->name('contact');

Route::get('/life', [HomeController::class, 'life'])->name('life');

Route::get('/technology', [HomeController::class, 'technology'])->name('technology');

Route::get('/internet', [HomeController::class, 'internet'])->name('internet');

Route::get('/seo', [HomeController::class, 'seo'])->name('seo');

Route::get('/blogspot', [HomeController::class, 'blogspot'])->name('blogspot');


Route::get('/education', [HomeController::class, 'education'])->name('education');
Route::get('/fact', [HomeController::class, 'fact'])->name('fact');
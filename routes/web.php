<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index'])->name('home');

// Pages
Route::get('/cvmaker', [PagesController::class, 'cvmaker'])->name('cvmaker');
// Templates
Route::get('/template/professional', [PagesController::class, 'professonal'])->name('template.professional');
Route::get('/template/normal', [PagesController::class, 'normal'])->name('template.normal');

// CV Form
Route::get('/cv-form', [PagesController::class, 'cvform'])->name('cvform');
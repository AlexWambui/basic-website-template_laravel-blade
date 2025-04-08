<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralPageController;
use App\Http\Controllers\ProfileController;

Route::view('/laravel-info', 'laravel-info');

Route::controller(GeneralPageController::class)->group(function () {
    Route::get('/', 'index')->name('home-page');
    Route::get('about', 'about')->name('about-page');
    Route::get('services', 'services')->name('services-page');
    Route::get('contact', 'contact')->name('contact-page');
});

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', function() {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralPageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MessageController;

Route::view('/laravel-info', 'laravel-info');

Route::controller(GeneralPageController::class)->group(function () {
    Route::get('/', 'index')->name('home-page');
    Route::get('about', 'about')->name('about-page');
    Route::get('services', 'services')->name('services-page');
    Route::get('contact', 'contact')->name('contact-page');
});
Route::post('/contact', [MessageController::class, 'store'])->name('messages.store');

Route::middleware(['auth', 'verified'])->group(function() {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');

    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    Route::get('/messages/{message}/edit', [MessageController::class, 'edit'])->name('messages.edit');
    Route::delete('/messages/{message}/destroy', [MessageController::class, 'destroy'])->name('messages.destroy');
});

require __DIR__.'/auth.php';

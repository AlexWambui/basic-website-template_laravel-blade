<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GeneralPageController;

Route::view('/laravel-info', 'laravel-info');

Route::controller(GeneralPageController::class)->group(function () {
	Route::get('/', 'index')->name('home-page');
	Route::get('about', 'about')->name('about-page');
	Route::get('services', 'services')->name('services-page');
	Route::get('contact', 'contact')->name('contact-page');
});

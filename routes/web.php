<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontendController;

// the website routes
Route::get('/', function () { return view('home.index'); })->name('home');
Route::get('/contacts', function () { return view('home.contact'); })->name('contact');
Route::get('/about-us', function () { return view('home.about'); })->name('about');
Route::get('/gallery', function () { return view('home.gallery'); })->name('gallery');
Route::get('/causes', function () { return view('home.causes'); })->name('causes');
Route::get('/blog', [FrontendController::class, 'index'])->name('blog.index');
Route::get('/blog/{id}', [FrontendController::class, 'show'])->name('blog.show');

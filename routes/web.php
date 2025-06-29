<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');
Route::get('/contact', function () {return view('contact');})->name('contact');
Route::get('/skills', function () {return view('skills');})->name('skills');
Route::get('/services', function () {return view('services');})->name('services');
Route::get('/about', function () {return view('about');})->name('about');
Route::get('/portfolio', function () {return view('portfolio');})->name('portfolio');
Route::get('/privacy', function () {return view('privacy');})->name('privacy');
Route::get('/terms', function () {return view('terms');})->name('terms');
Route::get('/cookies', function () {return view('cookies');})->name('cookies');
Route::get('/sitemap', function () {return view('sitemap');})->name('sitemap');
Route::get('/website', function () {return view('website');})->name('website');
Route::get('/system', function () {return view('system');})->name('system');
Route::get('/graphics', function () {return view('graphics');})->name('graphics');
Route::get('/stationary', function () {return view('stationary');})->name('stationary');
Route::get('/timetable', function () {return view('timetable');})->name('timetable');
Route::get('/updates', function () {return view('updates');})->name('updates');
Route::get('/mission', function () {return view('mission');})->name('mission');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

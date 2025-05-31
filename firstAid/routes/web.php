<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

Route::get('/', function () {
    return view('welcome');
})->name('home');

//Route ke oaid
Route::get('/oaid', function () {
    return view('oaid');
});

//Route ke sign up
Route::get('/signup', function () {
    return view('signup');
});

//Route ke list in
Route::get('/orphanages', function () {
    return view('orphanages');
})->name('orphanages');

//Route ke profile
Route::get('/profile', function () {
    return view('profile');
})->name('profile');

//Route ke donate
Route::get('/donate', function () {
    return view('donate');
})->name('donate');

//Route ke 7 ytm
Route::get('/tujuh', function () {
    return view('tujuh');
});

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::redirect('settings', 'settings/profile');

    Volt::route('settings/profile', 'settings.profile')->name('settings.profile');
    Volt::route('settings/password', 'settings.password')->name('settings.password');
    Volt::route('settings/appearance', 'settings.appearance')->name('settings.appearance');
});

require __DIR__.'/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;
use App\Http\Controllers\OrphanageController;
use App\Http\Controllers\AuthController;


//Route ke login
Route::get('/', function () {
    return view('login');
});
Route::post('/login', [AuthController::class, 'login'])->name('login');

//Route ke sign up
Route::get('/signup', function () {
    return view('signup');
});
Route::post('/register', [AuthController::class, 'register'])->name('register');

//Route ke list in
Route::get('/orphanages', [OrphanageController::class, 'index'])->name('orphanages');

//Route ke profile
Route::get('/profile', function () {
    $user = session('user');
    if (!$user) return redirect('/');

    $donations = \DB::table('donate')
        ->join('orphanage', 'donate.orph_id', '=', 'orphanage.id')
        ->where('donate.user_id', is_array($user) ? $user['id'] : $user->id)
        ->select('donate.*', 'orphanage.name', 'orphanage.location', 'orphanage.image')
        ->orderBy('donate.date', 'desc')
        ->get();

    return view('profile', compact('user', 'donations'));
})->name('profile');

//Route ke logout
Route::get('/logout', function () {
    session()->forget('user');
    return redirect('/');
})->name('logout');

//Route ke donate
Route::get('/donate/{orph_id}', [OrphanageController::class, 'donatePage'])->name('donate');
Route::post('/donate/{orph_id}', [OrphanageController::class, 'donate'])->name('donate.store');

//Route ke orphanage detail
Route::get('/orphanages/{id}', [OrphanageController::class, 'show'])->name('orphanage.show');

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

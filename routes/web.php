<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect('/index'); // Redirect to index if logged in
    }
    return redirect('/login');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/index', function () {
        return view('frontend/index');
    })->name('index');

    Route::get('/news', function () {
        return view('components/news');
    })->name('news');

    Route::get('/brands', function () {
        return view('components/brands');
    })->name('brands');

    Route::get('/geography', function () {
        return view('components/geography');
    })->name('geography');

    Route::get('/history', function () {
        return view('components/history');
    })->name('history');


});

require __DIR__ . '/auth.php';

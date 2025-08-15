<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/residents', function () {
    return view('residents');
})->middleware(['auth', 'verified'])->name('residents');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/officials', function () {
    return view('official');
})->middleware(['auth', 'verified'])->name('officials');

Route::get('/documents', function () {
    return view('documents');
})->middleware(['auth', 'verified'])->name('documents');

Route::get('/incident', function () {
    return view('incident');
})->middleware(['auth', 'verified'])->name('incident');

Route::get('/announcements', function () {
    return view('announcements');
})->middleware(['auth', 'verified'])->name('announcements');

Route::get('/discover', function () {
    return view('discover');
})->middleware(['auth', 'verified'])->name('discover');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';    

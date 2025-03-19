<?php

use App\Http\Controllers\HomestayController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/homestays', [HomestayController::class, 'index'])->name('homestays.index');
Route::get('/homestays/{homestay}', [HomestayController::class, 'show'])->name('homestays.show');

Route::get('/homestays/create', [HomestayController::class, 'create'])->name('homestays.create');


Route::get('/bookings/create/{homestay_id}', [BookingController::class, 'create'])->name('bookings.create');

Route::middleware(['auth'])->group(function () {
    Route::get('/homestays/{homestay}/reviews/create', [ReviewController::class, 'create'])->name('reviews.create');
    Route::post('/homestays/{homestay}/reviews', [ReviewController::class, 'store'])->name('reviews.store');

    Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
    Route::put('/reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');
    Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


<?php

use App\Http\Controllers\HomestayController;
use App\Http\Controllers\ActivityController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');


Route::get('/{type}/{id}/reserve', [ReservationController::class, 'showReservation'])
    ->name('reservations.show');
Route::post('/{type}/{id}/reserve', [ReservationController::class, 'processReservation'])
    ->name('reservations.process');

Route::get('/homestays', [HomestayController::class, 'index'])->name('homestays.index');
Route::get('/homestays/create', [HomestayController::class, 'create'])->name('homestays.create');
Route::get('/homestays/search', [HomestayController::class, 'search'])->name('homestays.search');
Route::get('/homestays/{homestay}', [HomestayController::class, 'show'])->name('homestays.show');

Route::get('/activities', [ActivityController::class, 'index'])->name('activities.index');
Route::get('/activities/create', [ActivityController::class, 'create'])->name('activities.create');
Route::get('/activities/search', [ActivityController::class, 'search'])->name('activities.search');
Route::get('/activities/{activity}', [ActivityController::class, 'show'])->name('activities.show');


Route::get('reviews/create/{type}/{id}', [ReviewController::class, 'create'])->name('reviews.create');
Route::get('/reviews/{review}/edit', [ReviewController::class, 'edit'])->name('reviews.edit');
Route::put('/reviews/{review}', [ReviewController::class, 'update'])->name('reviews.update');
Route::delete('/reviews/{review}', [ReviewController::class, 'destroy'])->name('reviews.destroy');
Route::post('/reviews', [ReviewController::class, 'store'])->name('reviews.store');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
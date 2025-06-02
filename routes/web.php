<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TalkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/talks/create', [TalkController::class, 'create'])->name('talks.create');
    Route::get('/talks/{talk}', [TalkController::class, 'show'])->name('talks.show');
    Route::get('/talks/{talk}/edit', [TalkController::class, 'edit'])->name('talks.edit');
    Route::patch('/talks/{talk}', [TalkController::class, 'update'])->name('talks.update');
    Route::delete('/talks/{talk}', [TalkController::class, 'destroy'])->name('talks.destroy');
    Route::get('/talks', [TalkController::class, 'index'])->name('talks.index');
    Route::post('/talks', [TalkController::class, 'store'])->name('talks.store');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\FigureController;
use App\Http\Controllers\ProfileController;
use App\Models\Figure;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Figure/main');
});

Route::get('/figure', [FigureController::class, 'index'])->name('main');
Route::get('/show/{id?}', [FigureController::class, 'show'])->name('show');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

<?php

use App\Http\Controllers\CreatureController;
use App\Http\Controllers\ProfileController;
use App\Models\Creature;
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
});

Route::get('creatures', [CreatureController::class, 'index']);
Route::get('creatures/create', [CreatureController::class, 'create'])
->middleware(['auth', 'verified'])->name('create-creature');
Route::post('creatures', [CreatureController::class, 'store'])
->middleware(['auth', 'verified'])->name('store-creature');
Route::get('creatures/{id}/edit', [CreatureController::class, 'edit'])
->middleware(['auth', 'verified'])->name('edit-creature');
Route::put('creatures/{id}', [CreatureController::class, 'update'])
->middleware(['auth', 'verified'])->name('update-creature');
Route::delete('creatures/{id}', [CreatureController::class, 'destroy'])
->middleware(['auth', 'verified'])->name('destroy-creature');

require __DIR__.'/auth.php';

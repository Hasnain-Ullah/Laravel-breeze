<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\VendorController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/profile_intro', function () {
    return view('profile_intro');
})->middleware(['auth', 'verified'])->name('profile_intro');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::get('index', function () {
//     return view('template.index');
// })->name('index');

// Route::get('app', function () {
//     return view('template.app');
// })->name('app');

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/app', [App\Http\Controllers\AdminController::class, 'Admin'])->name('app');
});
Route::middleware(['auth', 'role:user'])->group(function () {
    Route::get('/index', [App\Http\Controllers\VendorController::class, 'Vendor'])->name('index');
});

require __DIR__.'/auth.php'; 

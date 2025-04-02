<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ContactController;

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



Route::get('template', function () {
    return view('pages.template');
})->name('template');

Route::get('createstep', function () {
    return view('pages.createstep');
})->name('createstep');



Route::get('contact', [ContactController::class, 'create'])->name('contact');
Route::post('contact/store', [ContactController::class, 'store'])->name('createstep.store');
Route::get('cv/create/step0', [ContactController::class, 'showStep0'])->name('cv.create.step0');

require __DIR__ . '/auth.php';

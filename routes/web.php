<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
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

// Route::get('contact',[ContactController::class, 'send'])->name('contact.send');


Route::get('contact',[ContactController::class, 'index'])->name('contact.index');

Route::post('contact',[ContactController::class, 'sendEmail'])->name('contact.sendEmail');
Route::get('notifications', function (){
    return view('Notification');
}); 

require __DIR__.'/auth.php';

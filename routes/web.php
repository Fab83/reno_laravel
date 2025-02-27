<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\LogementController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacts', [ContactController::class, 'index'])->name('contacts.index');
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contacts.create');
Route::post('/contacts', [ContactController::class, 'store'])->name('contacts.store');
Route::get('/contacts/{contact}', [ContactController::class, 'show'])->name('contacts.show');
Route::get('/contacts/{contact}/edit', [ContactController::class, 'edit'])->name('contacts.edit');
Route::put('/contacts/{contact}', [ContactController::class, 'update'])->name('contacts.update');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contacts.destroy');

Route::get('/logements', [LogementController::class, 'index'])->name('logements.index');
Route::get('/logements/create', [LogementController::class, 'create'])->name('logements.create');
Route::post('/logements', [LogementController::class, 'store'])->name('logements.store');
Route::get('/logements/{contact}', [LogementController::class, 'show'])->name('logements.show');
Route::get('/logements/{contact}/edit', [LogementController::class, 'edit'])->name('logements.edit');
Route::put('/logements/{contact}', [LogementController::class, 'update'])->name('logements.update');
Route::delete('/logements/{contact}', [LogementController::class, 'destroy'])->name('logements.destroy');


Route::get('/liens', function () {
    return view('liens');
});

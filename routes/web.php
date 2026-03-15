<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('records', RecordController::class);


// Route::[METHOD]('[URI]', [[CONTROLLER]::class, '[FUNCTION]'])->name('[NICKNAME]');

// list
Route::get('/records', [RecordController::class, 'index'])->name('records.index');

// create

// store

// edit
Route::get('/records/{id}/edit', [RecordController::class, 'edit'])->name('records.edit');

// update

// show

// destroy
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecordController;

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('records', RecordController::class);
Route::get('/records', [RecordController::class, 'index'])->name('records.index');
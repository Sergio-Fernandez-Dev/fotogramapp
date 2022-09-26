<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/images', [ImageController::class, 'index'])->name('allImages');
Route::get('/images/{id}', [ImageController::class, 'index'])->name('oneImage');
Route::post('/images/{id}', [ImageController::class, 'create'])->name('createImage');
Route::put('/images/{id}', [ImageController::class, 'update'])->name('updateImage');
Route::delete('/images/{id}', [ImageController::class, 'delete'])->name('deleteImage');



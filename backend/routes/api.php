<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/v1/images', [ImageController::class, 'index'])->name('allImages');
Route::get('/v1/images/{id}', [ImageController::class, 'index'])->name('oneImage');
Route::post('/v1/images/{id}', [ImageController::class, 'create'])->name('createImage');
Route::put('/v1/images/{id}', [ImageController::class, 'update'])->name('updateImage');
Route::delete('/v1/images/{id}', [ImageController::class, 'delete'])->name('deleteImage');



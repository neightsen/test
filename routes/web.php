<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QestionController;
use App\Http\Controllers\AnswerController;

Route::get('/', [QestionController::class, 'index']);
Route::post('/', [QestionController::class, 'create']);
Route::get('/questions/{qestion}', [QestionController::class, 'transition'])->name('transition');
Route::post('/questions/{qestion}/answers', [AnswerController::class, 'store'])->name('store');
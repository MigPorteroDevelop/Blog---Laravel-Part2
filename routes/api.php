<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/post/index', [\App\Http\Controllers\PostController::class, 'index']);
Route::get('/post/{id}/show', [\App\Http\Controllers\PostController::class, 'show']);
Route::post('/post/create', [\App\Http\Controllers\PostController::class, 'store']);
Route::put('/post/{id}/update', [\App\Http\Controllers\PostController::class, 'update']);
Route::delete('/post/{id}/delete', [\App\Http\Controllers\PostController::class, 'destroy']);


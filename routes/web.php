<?php

use App\Http\Controllers\NewsController;
use Illuminate\Support\Facades\Route;

Route::get('/', [NewsController::class, 'index'])->name('news.index');
Route::get('/noticia/{news}', [NewsController::class, 'show'])->name('news.show');
Route::get('/criar', [NewsController::class, 'store'])->name('news.store');
Route::get('/editar/{news}', [NewsController::class, 'update'])->name('news.update');

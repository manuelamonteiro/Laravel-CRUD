<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix("/books")->group(function () {
    Route::get('', [BookController::class, 'index']);
    Route::get('/create', [BookController::class, 'create']);
    Route::post('', [BookController::class, 'store']);
    Route::get('/{id}', [BookController::class, 'show']);
    Route::get('/{id}/edit', [BookController::class, 'edit']);
    Route::put('/{id}', [BookController::class, 'update']);
    Route::delete('/{id}/delete', [BookController::class, 'destroy']);
});
<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/categories/create', [CategoryController::class, 'store']);
Route::put('/categories/{category}/edit', [CategoryController::class, 'update'])->middleware('auth');
Route::get('/categories/{category}', [CategoryController::class, 'show']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::delete('/categories/{category}', [ProductController::class, 'destroy'])->middleware('auth');

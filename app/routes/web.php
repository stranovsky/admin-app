<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/products/create', [ProductController::class, 'store']);
Route::put('/products/{product}/edit', [ProductController::class, 'update'])->middleware('auth');
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/manage', [ProductController::class, 'manage'])->middleware('auth');
Route::get('/products/create', [ProductController::class, 'create'])->middleware('auth');
Route::delete('/products/{product}', [ProductController::class, 'destroy'])->middleware('auth');
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::get('/products/{product}/edit', [ProductController::class, 'edit'])->middleware('auth');

Route::post('/users',[UserController::class, 'store']);
Route::post('/users/authenticate',[UserController::class, 'authenticate']);
Route::get('/register',[UserController::class, 'create'])->middleware('guest');
Route::get('/login',[UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/logout',[UserController::class,'logout'])->middleware('auth');

/*
whis be wild card route
*/
Route::get('/hello/{id}', function($id) {
    return response('<h1><i>sup world ' . $id.'</i></h1>');
})->where('id', '[0-9]+');

//request example
Route::get('/search', function(Request $request){
    return($request->username . ' ' . $request->isAdmin);
});
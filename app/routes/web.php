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
Route::put('/products/{product}/edit', [ProductController::class, 'update']);
Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/create', [ProductController::class, 'create']);
Route::delete('/products/{product}', [ProductController::class, 'destroy']);
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::get('/products/{product}/edit', [ProductController::class, 'edit']);

Route::post('/users',[UserController::class, 'store']);
Route::get('/register',[UserController::class, 'create']);

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
<?php

use App\Http\Controllers\ProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/products', [ProductController::class, 'index']);

Route::get('/products/{product}', [ProductController::class, 'show']);

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
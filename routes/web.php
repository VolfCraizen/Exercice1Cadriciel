<?php

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

use App\Http\Controllers\PieController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [PieController::class, 'home']);
Route::get('/about', [PieController::class, 'about']);
Route::get('/products', [PieController::class, 'products']);
Route::get('/store', [PieController::class, 'store']);
Route::get('/contact', [PieController::class, 'contact']);
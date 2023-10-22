<?php

use App\Http\Controllers\BeanieController;
use App\Http\Controllers\ProductLineController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/beanies', [BeanieController::class, 'index']);

Route::get('/beanies/{beanie}', [BeanieController::class, 'show']);

Route::get('/productlines', [ProductLineController::class, 'index']);

Route::get('/productlines/create', [ProductLineController::class, 'create']);

Route::get('/productlines/{productLine}', [ProductLineController::class, 'show']);

Route::post('/productlines', [ProductLineController::class, 'store']);


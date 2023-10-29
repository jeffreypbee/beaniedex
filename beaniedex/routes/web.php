<?php

use App\Http\Controllers\BeanieController;
use App\Http\Controllers\BeanieVariantController;
use App\Http\Controllers\ProductLineController;
use App\Models\BeanieVariant;
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

// Beanies routes

Route::get('/beanies', [BeanieController::class, 'index']);

Route::get('/beanies/create', [BeanieController::class, 'create']);

Route::get('/beanies/{beanie}', [BeanieController::class, 'show']);

Route::post('/beanies', [BeanieController::class, 'store']);

Route::get('/beanies/{beanie}/edit', [BeanieController::class, 'edit']);

Route::put('/beanies/{beanie}', [BeanieController::class, 'update']);

Route::delete('/beanies/{beanie}', [BeanieController::class, 'destroy']);

// Variants

Route::get('/beanies/{beanie}/variants/create', [BeanieVariantController::class, 'create']);

Route::post('/variants', [BeanieVariantController::class, 'store']);

Route::get('/variants/{variant}/edit', [BeanieVariantController::class, 'edit']);

Route::put('/variants/{variant}', [BeanieVariantController::class, 'update']);

Route::delete('/variants/{variant}', [BeanieVariantController::class, 'destroy']);

// Product Lines routes

Route::get('/productlines', [ProductLineController::class, 'index']);

Route::get('/productlines/create', [ProductLineController::class, 'create']);

Route::get('/productlines/{productLine}', [ProductLineController::class, 'show']);

Route::post('/productlines', [ProductLineController::class, 'store']);


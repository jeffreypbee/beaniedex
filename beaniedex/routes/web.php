<?php

use App\Models\Beanie;
use App\Models\BeanieVariant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeanieController;
use App\Http\Controllers\ProductLineController;
use App\Http\Controllers\BeanieVariantController;
use App\Http\Controllers\TagController;

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
    return view('welcome', [
        'randomBeanie' => Beanie::inRandomOrder()->first()
    ]);
});

// Beanies routes

Route::get('/beanies', [BeanieController::class, 'index']);

Route::get('/beanies/create', [BeanieController::class, 'create']);

Route::get('/beanies/{beanie}', [BeanieController::class, 'show']);

Route::post('/beanies', [BeanieController::class, 'store']);

Route::get('/beanies/{beanie}/edit', [BeanieController::class, 'edit']);

Route::put('/beanies/{beanie}', [BeanieController::class, 'update']);

Route::delete('/beanies/{beanie}', [BeanieController::class, 'destroy']);


// Beanie Tag routes

Route::get('/beanies/{beanie}/tags/manage', [BeanieController::class, 'manageTags']);

Route::delete('/beanies/{beanie}/tags/{tag}', [BeanieController::class, 'removeTag']);

Route::post('/beanies/{beanie}/tags', [BeanieController::class, 'addTag']);


// Tag routes

Route::get('/tags', [TagController::class, 'index']);

Route::get('/tags/create', [TagController::class, 'create']);

Route::get('/tags/{tag}', [TagController::class, 'show']);

Route::post('/tags', [TagController::class, 'store']);


// Product Lines routes

Route::get('/productlines', [ProductLineController::class, 'index']);

Route::get('/productlines/create', [ProductLineController::class, 'create']);

Route::get('/productlines/{productLine}', [ProductLineController::class, 'show']);

Route::post('/productlines', [ProductLineController::class, 'store']);


<?php

use App\Models\Beanie;
use App\Models\BeanieVariant;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TagController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BeanieController;
use App\Http\Controllers\ProductLineController;
use App\Http\Controllers\BeanieVariantController;

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
        'randomBeanies' => Beanie::inRandomOrder()->limit(5)->get(),
        'latestBeanies' => Beanie::orderBy('created_at', 'desc')->limit(5)->get(),
        'todaysBirthdays' => Beanie::where('birthday', 'like', '%' . date("m-d"))->get()
    ]);
});

// User routes

Route::get('/login', [UserController::class, 'login'])->middleware('guest');

Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

Route::post('/users/authenticate', [UserController::class, 'authenticate']);

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

Route::get('/tags/{tag}/edit', [TagController::class, 'edit']);

Route::put('/tags/{tag}', [TagController::class, 'update']);

Route::delete('/tags/{tag}', [TagController::class, 'destroy']);


// Product Lines routes

Route::get('/productlines', [ProductLineController::class, 'index']);

Route::get('/productlines/create', [ProductLineController::class, 'create']);

Route::get('/productlines/{productLine}', [ProductLineController::class, 'show']);

Route::post('/productlines', [ProductLineController::class, 'store']);


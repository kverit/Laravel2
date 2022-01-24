<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'show']);
Route::get('/auth', [App\Http\Controllers\AuthController::class, 'show']);
Route::get('/category', [App\Http\Controllers\NewsCategoryController::class, 'show']);
Route::get('/news', [App\Http\Controllers\TargetNewsController::class, 'show']);
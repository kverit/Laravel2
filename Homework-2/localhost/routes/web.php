<?php

use Illuminate\Support\Facades\Route;
use App\Http\Admin\Controllers;
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

//Route::get('/', function () {
//    return view('welcome');
//});

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'show']);
//Route::get('/auth', [App\Http\Controllers\AuthController::class, 'show']);
//Route::get('/category', [App\Http\Controllers\CategoryController::class, 'show']);
//Route::get('/news', [App\Http\Controllers\TargetNewsController::class, 'show']);

//Route::resource('category', \App\Http\Controllers\CategoryController::class);

Route::group([
    'prefix' => '/admin/news',
    'as' => 'admin::news::'
], function () {

    Route::get('/', [App\Http\Controllers\Admin\NewsController::class, 'index'])
        ->name('index');

    Route::get('create', [App\Http\Controllers\Admin\NewsController::class, 'create'])
        ->name('create');

    Route::post('save', [App\Http\Controllers\Admin\NewsController::class, 'save'])
        ->name('save');

    Route::get('show', [App\Http\Controllers\Admin\NewsController::class, 'show'])
        ->name('show');

    Route::get('update/{news}', [App\Http\Controllers\Admin\NewsController::class, 'update'])
        ->where('news', '[0-9]+')
        ->name('update');

    Route::get('/delete/{id}', [App\Http\Controllers\Admin\NewsController::class, 'delete'])
        ->where('id', '[0-9]+')
        ->name('delete');
});



Route::group([
    'prefix' => '/admin/category',
    'as' => 'admin::category::'
], function () {

    Route::get('create', [App\Http\Controllers\Admin\CategoryController::class, 'create'])
        ->name('create');

    Route::post('save', [App\Http\Controllers\Admin\CategoryController::class, 'save'])
        ->name('save');

    Route::get('/', [App\Http\Controllers\Admin\CategoryController::class, 'index'])
        ->name('index');

    Route::get('update/{category}', [App\Http\Controllers\Admin\CategoryController::class, 'update'])
        ->where('category', '[0-9]+')
        ->name('update');

    Route::get('delete/{id}', [App\Http\Controllers\Admin\CategoryController::class, 'delete'])
        ->where('id', '[0-9]+')
        ->name('delete');
});

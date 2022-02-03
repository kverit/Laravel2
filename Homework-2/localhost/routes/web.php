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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'show']);
//Route::get('/auth', [App\Http\Controllers\AuthController::class, 'show']);
//Route::get('/category', [App\Http\Controllers\NewsCategoryController::class, 'show']);
//Route::get('/news', [App\Http\Controllers\TargetNewsController::class, 'show']);

//Route::resource('category', \App\Http\Controllers\CategoryController::class);

Route::group([
    'prefix' => '/admin/news',
    'as' => 'admin::news::'
], function() {
    
    Route::match(['get', 'post'], 'create', [App\Http\Controllers\Admin\NewsController::class, 'save'])
        ->name('create');

    Route::get('show', [App\Http\Controllers\Admin\NewsController::class, 'show'])
        ->name('show');

    Route::get('update', [NewsController::class, 'update'])
        ->name('update');

    Route::get('delete', [NewsController::class, 'delete'])
        ->name('delete');
});



//Route::group([
//        'prefix' => '/admin/category',
//        'as' => 'admin::category::'
//    ], function() {
//        
//        Route::post('create', [App\Http\Controllers\CategoryController::class, 'create'])
//            ->name('create');
//
//        Route::get('show', [App\Http\Controllers\CategoryController::class, 'show'])
//          ->name('show');
//
//        Route::get('update', [CategoryController::class, 'update'])
//            ->name('update');
//
//        Route::get('delete', [CategoryController::class, 'delete'])
//            ->name('delete');
//});
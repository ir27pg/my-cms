<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\TagController;


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

Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('/articles', [ArticleController::class, 'index'])
        ->name('article');

    Route::get('/articles/{id}', [ArticleController::class, 'show'])
        ->name('article.show');


    Route::get('/post', function () {
        return view('store');
    })->name('article.store');;;

    Route::post('/post', [ArticleController::class, 'store']);

    Route::delete('/articles/{id}', [ArticleController::class, 'destroy'])
        ->name('article.destroy');

    Route::get('/edit/{id}', [ArticleController::class, 'edit'])
        ->name('article.edit');

    Route::post('/edit/{id}', [ArticleController::class, 'update'])
        ->name('article.update');

    Route::get('/tags/post', function () {
        return view('tags.store');
    })->name('tag.store');

    Route::post('/tags/post', [TagController::class, 'store'])
        ->name('tags.store');
});

require __DIR__ . '/auth.php';

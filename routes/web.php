<?php


use App\Http\Controllers\Article\ArticleController;
use App\Http\Controllers\Article\CommentController;
use App\Http\Controllers\Product\ProductController;
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

\Illuminate\Support\Facades\Auth::routes();
Route::get('/', [ArticleController::class, 'index']);

Route::get('/articles', [ArticleController::class, 'index']);

Route::get('/articles/detail/{id}', [ArticleController::class, 'detail']);

Route::get('/articles/add', [ArticleController::class, 'add']);

Route::post('/articles/add', [
    ArticleController::class,
    'create'
]);

Route::get('/articles/delete/{id}', [
    ArticleController::class,
    'delete'
]);
Route::post('/comments/add', [
    CommentController::class,
    'create'
]);
Route::get('/comments/delete/{id}', [
    CommentController::class,
    'delete'
]);




Route::get('/products', [ProductController::class, 'index']);



// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', [ArticleController::class, 'index']);

<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

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

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/thread', [PageController::class, 'thread']);
Route::get('/categories', [PageController::class, 'categories']);
Route::get('/thread/delete', [ApiController::class, 'deleteThread']);
Route::get('/thread/new', [PageController::class, 'newThread']);
Route::post('/thread/new', [ApiController::class, 'storeThread']);
Route::get('/answer/delete', [ApiController::class, 'deleteAnswer']);
Route::post('/answer/new', [ApiController::class, 'storeAnswer']);
Route::get('/search', [PageController::class, 'search']);
Route::get('/user/{id}', [PageController::class, 'user']);
Route::get('/tag/{name}', [PageController::class, 'tag']);
Route::get('/category/{name}', [PageController::class, 'category']);
Route::get('/thread/edit', [PageController::class, 'editThread']);
Route::post('/thread/edit', [ApiController::class, 'editThread']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
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
Route::get('/thread/{id?}', [PageController::class, 'thread']);
Route::post('/thread/new', [ApiController::class, 'storeThread']);
Route::post('/answer/new/{id}', [ApiController::class, 'storeAnswer']);
Route::get('/user/{id}', [PageController::class, 'user']);

Route::get('/tags/{id}', [ThreadController::class, 'tagsForSpecificThread']);
// Route::get('/tag/{id}', [PageController::class, 'user']);


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
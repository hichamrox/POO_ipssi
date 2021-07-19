<?php

use Illuminate\Support\Facades\Route;
use App\Models\Aminal;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/animal', [App\Http\Controllers\AminalController::class, 'index']);
Route::get('/animal/{animal}/show', [App\Http\Controllers\AminalController::class, 'show']);
Route::get('/animal/{animal}/adopte', [App\Http\Controllers\AminalController::class, 'adopte'])->middleware('auth');

Route::get('/toto/{t}', function(Aminal $i){
    return "you ask : ".$i;
});

Route::get('/article', [App\Http\Controllers\ArticleController::class, 'index']);
Route::get('/article/{article}', [App\Http\Controllers\ArticleController::class, 'show']);

Route::get('/product', [\App\Http\Controllers\ProductController::class, 'index']);

Route::get('dons', [\App\Http\Controllers\DonationController::class, 'index']);
Route::post('dons', [\App\Http\Controllers\DonationController::class, 'store'])->middleware('auth');

Route::group(['middleware' => 'admin'], function () {
    Route::get('/animal/create', [\App\Http\Controllers\AminalController::class, 'create']);
    Route::post('/animal/create', [\App\Http\Controllers\AminalController::class, 'store']);
});

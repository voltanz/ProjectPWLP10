<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ArticleController;

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
Route::resource('articles', ArticleController::class);
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::get('/article/cetak_pdf', [ArticleController::class, 'cetak_pdf']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

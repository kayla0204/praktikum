<?php

use App\Http\Controllers\BioController;
use App\Http\Controllers\BiodataController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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

Route::get('/list', function () {
    return view('list_siswa');
});
Route::get('/form', function () {
    return view('form');
});



Route::get('/home', [HomeController::class,'index'])->name('home');
Route::get('/biodata', [BioController::class, 'index'])->name('biodata');
Route::get('/list', [BiodataController::class, 'index'])->name('list');
Route::get('/form', [BiodataController::class, 'create'])->name('form');
Route::get('/store_siswa', [BiodataController::class, 'store']);

Route::get('/post', [PostController::class, 'index']);

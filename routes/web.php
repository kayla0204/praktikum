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

// Route::get('/list', function () {
//     return view('list_siswa');
// });
// Route::get('/form', function () {
//     return view('form');
// });



// Route::get('/home', [HomeController::class,'index'])->name('home');
// Route::get('/biodata', [BioController::class, 'index'])->name('biodata');
Route::get('/list', [BiodataController::class, 'index'])->name('list');
Route::get('/form', [BiodataController::class, 'create'])->name('form');
Route::post('/store_siswa', [BiodataController::class, 'store']);
Route::get('/edit/{id}', [BiodataController::class, 'edit'])->name('edit-siswa');
Route::delete('/delete/{id}', [BiodataController::class, 'destroy'])->name('destroy-siswa');
Route::put('/update/{id}', [BiodataController::class, 'update'])->name('update-siswa');
Route::get('/bio/{id}', [BiodataController::class, 'show'])->name('show-bio');

Auth::routes();

Route::get('/home', [BioController::class, 'index'])->name('home');
Route::get('/biodata', [BioController::class, 'biodata'])->name('biodata');


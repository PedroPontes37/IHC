<?php

use App\Http\Controllers\CarrosController;
use Illuminate\Support\Facades\Route;

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

Route::get('/carros', [CarrosController::class,'index'])->name('carros.index');
Route::get('/carros/create', [CarrosController::class,'create'])->name('carros.create')->middleware('auth');
Route::get('/carros/edit/{id}', [CarrosController::class,'edit'])->name('carros.edit')->middleware('auth');
Route::post('/carros', [CarrosController::class,'store'])->name('carros.store')->middleware('auth');
Route::get('/carros/{id}', [CarrosController::class,'show'])->name('carros.show');
Route::put('/carros/{id}', [CarrosController::class,'update'])->name('carros.update')->middleware('auth');

Route::delete('/carros/{id}', [CarrosController::class,'destroy'])->name('carros.destroy')->middleware('auth');

Route::get('/perfil', function () {
    return view('perfil');
});

Route::get('/registo', function () {
    return view('registo');
});

Route::get('/datas', function () {
    return view('datas');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

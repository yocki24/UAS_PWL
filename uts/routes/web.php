<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProgramController;

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

Route::get('/products', [ProductController::class, 'product']);

//Route::get('/program', [ProgramController::class, 'program']);

route::resource('programs', ProgramController::class);

Route::get('/program/cetak_khs', [ProgramController::class, 'cetak_khs']);


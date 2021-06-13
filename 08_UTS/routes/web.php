<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\ProfileControllerS;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

//  Praktikum 1
Route::get('/', function () {
    return view('auth/login');
});
/*
Route::get('/about', function () {
    echo "1941720144<br>
    Zidan Shabira As Sidiq";
});

Route::get('/articles/{id}', function ($id) {
    return 'Halaman Artikel dengan ID '.$id;
});
*/

/* Praktikum 2 Page Controller 

Route::get('/', [PageController::class, 'index']);

Route::get('/about', [PageController::class, 'about']);

Route::get('/articles/{id}', [PageController::class, 'articles']);
*/


/* Praktikum 2 Home Controller

Route::get('/', [HomeController::class, 'index']);

Route::get('/about', [HomeController::class, 'about']);

Route::get('/articles/{id}', [HomeController::class, 'articles']);
*/


/* Praktikum 2 About Controller 

Route::get('/', [AboutController::class, 'index']);

Route::get('/about', [AboutController::class, 'about']);

Route::get('/articles/{id}', [AboutController::class, 'articles']);
*/

/* Praktikum 2 Article Controller 

Route::get('/', [ArticleController::class, 'index']);

Route::get('/about', [ArticleController::class, 'about']);

Route::get('/articles/{id}', [ArticleController::class, 'articles']);
*/


use Illuminate\Support\Facades\View;

//URL, nama controller, nama fungsinya <-- 3 parameter
Route::get('/hello', [WelcomeController::class, 'hello']);



// Route::get('/hello', function () {
//     return view('coba.hello',
//     [
//         'nim' => 'Zidan',
//         'pekerjaan' => 'Mahasiswa'
//     ]);
//     //return view('coba.hello', ['nim' => '1941720144']);
//     //return View::make('hello', ['nim' => '1941720144']);

//     //return view('coba.hello')
//     //->with('nim','Zidan')
//     //->with('pekerjaan','Mahasiswa');
// });

Route::get('latihan-template', function(){
    return view('child');
});


// Praktikum 1
// Halaman HOME
/*Route::get('/home', [HomeController::class, 'home']);

//Halaman Products
Route::prefix('category')->group(function(){
    Route::get('/marbel-edu-games', [ProductController::class, 'edugames']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'friendskidsgames']);
});

//Halaman News
Route::get('/news', [NewsController::class, 'news']);


//Halaman Program
Route::prefix('program')->group(function(){
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganindustri']);
});

//Halaman About Us
Route::get('/about', [AboutController::class, 'about']);

//Halaman Contact Us
Route::get('/contact', [ContactController::class, 'contact']);*/



//Praktikum 2

//Halaman Index
Route::get('/index', [IndexController::class, 'index']);

//Halaman Products
Route::get('/product', [ProductController::class, 'product']);
  
//Halaman About Us
Route::get('/about', [AboutController::class, 'about']);

//Halaman Contact Us
Route::get('/contact', [ContactController::class, 'contact']);

//Halaman Contact Us
Route::get('/program', [ProgramController::class, 'program']);

//Halaman Contact Us
Route::get('/news', [NewsController::class, 'news']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['middleware' => 'auth'], function () {
    Route::get('profile', [App\Http\Controllers\ProfileController::class, 'edit'])->name('profile.edit');
});

Route::group(['middleware' => 'auth'], function () {

    Route::get('profile', [App\Http\Controllers\ProfileController::class, 'edit'])
        ->name('profile.edit');

    Route::patch('profile', [App\Http\Controllers\ProfileController::class, 'edit'])
        ->name('profile.update');
});

Route::resource('products', App\Http\Controllers\ProductsController::class);
<?php

use App\Http\Controllers\HomepageController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\LatihanController;
use App\Http\Controllers\ProdukController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;


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

// Route::get('/home', function () {
//     return 'haiii';
// });

// Route::get('/latihan', [LatihanController::class, 'index']);

// Route::get('/beranda', [LatihanController::class, 'beranda']);

Route::get('/', [HomepageController::class, 'index']);

Route::get('/about', [HomepageController::class, 'about']);

Route::get('/kontak', [HomepageController::class, 'kontak']);

// Route::get('/kategoriproduk', [HomepageController::class, 'kategoriproduk']);

Route::get('/kategori', [HomepageController::class, 'kategori']);

Route::get('/admin', [DashboardController::class, 'index']);

Route::get('/kategori/{slug}', [HomepageController::class, 'kategori.index']);

Route::get('/kategori/{slug}', [HomepageController::class, 'kategoridetail']);

//Route grub kategori
Route::group(['prefix' => 'admin'], function() {
    Route::get('/admin', 'DashboardController@index');
    //Routekategori
    Route::resource('kategori', KategoriController::class);
    //route produk
    Route::resource('produk', ProdukController::class);
});

Route::group(['prefix' => 'mahasiswa'], function() {
    Route::get('/mahasiswa', 'DashboardController@index');
    Route::get('pendaftaran', function () {
        return "Halaman pendaftaran";
    });
    Route::get('ujian', function () {
        return "halaman ujian";
    });
    Route::get('nilai', function () {
        return "halaman nilai";
    });
});
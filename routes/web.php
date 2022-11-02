<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\ProfileController;
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
    return view('Layout');
});

Route::get('berita', [BeritaController::class, 'index']);
Route::post('berita/tambah', [BeritaController::class, 'tambah']);
Route::post('berita/update/{id}', [BeritaController::class, 'update'])->name('berita.update');
Route::get('berita/delete/{id}', [BeritaController::class, 'delete']);


Route::get('kontak', [kontakController::class, 'index']);
Route::post('kontak/tambah', [kontakController::class, 'tambah']);
Route::post('kontak/update/{id}', [kontakController::class, 'update'])->name('kontak.update');
Route::get('kontak/delete/{id}', [kontakController::class, 'delete']);



Route::get('profile', [profileController::class, 'index']);
Route::post('profile/tambah', [profileController::class, 'tambah']);
Route::post('profile/update/{id}', [profileController::class, 'update'])->name('profile.update');
Route::get('profile/delete/{id}', [profileController::class, 'delete']);





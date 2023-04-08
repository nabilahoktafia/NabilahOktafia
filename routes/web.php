<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SPMController;
use App\Http\Controllers\LoginController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('dashboard', function () {
    return view('dashboard');
});

Route::get('tabel', function () {
    return view('tabel');
});

Route::get('form', function () {
    return view('form');
});

Route::get('chart', function () {
    return view('chart');
});

Route::get('laporan', function () {
    return view('laporan');
});

Route::get('login', function () {
    return view('login');
});

Route::get('edit', function () {
    return view('edit');
});


Route::post('/tambah', [SPMController::class, 'tambah'])->name('spm.tambah');   
Route::get('/tabel', [SPMController::class, 'tabel'])->name('tabel');   
Route::get('/login', [LoginController::class, 'login'])->name('login');
Route::post('/postlogin', [LoginController::class, 'postlogin'])->name('postlogin');
Route::get('/logout', [LoginController::class, 'logout'])->name('logout');
Route::get('/edit/{id}', [SPMController::class, 'edit'])->name('edit');
Route::get('/hapus/{id}', [SPMController::class, 'delete'])->name('hapus');
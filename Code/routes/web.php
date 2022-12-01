<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController;

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

Route::get('/', [UsersController::class, 'DataMHS'])->name('DataMHS')->middleware('auth');

Route::get('/FormMasuk', [UsersController::class, 'FormMasuk'])->name('FormMasuk');
Route::post('/Masuk', [UsersController::class, 'Masuk'])->name('Masuk');
Route::get('/Keluar', [UsersController::class, 'Keluar'])->name('Keluar');

Route::get('/FormBuatAkun', [UsersController::class, 'FormBuatAkun'])->name('FormBuatAkun');
Route::post('/BuatAkun', [UsersController::class, 'BuatAkun'])->name('BuatAkun');

Route::get('/FormUbahDataMahasiswa/{id}', [UsersController::class, 'FormUbahDataMahasiswa'])->name('FormUbahData')->middleware('auth');
Route::post('/UbahDataMahasiswa/{id}', [UsersController::class, 'UbahDataMahasiswa'])->name('UbahDataMahasiswa');

Route::get('/HapusAkun/{id}', [UsersController::class, 'HapusAkun'])->name('HapusAkun')->middleware('auth');

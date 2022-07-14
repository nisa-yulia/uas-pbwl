<?php

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/menu', [App\Http\Controllers\MenuController::class, 'index'])->name('menu');
Route::get('/pelanggan', [App\Http\Controllers\PelangganController::class, 'index'])->name('pelanggan');
Route::get('/transaksi', [App\Http\Controllers\TransaksiController::class, 'index'])->name('transaksi');

Route::get('/menu/create', [App\Http\Controllers\MenuController::class, 'create']);
Route::post('/menu', [App\Http\Controllers\MenuController::class, 'store']);
Route::get('/menu/{id}/edit', [App\Http\Controllers\MenuController::class, 'edit']);
Route::patch('/menu/{id}', [App\Http\Controllers\MenuController::class, 'update']);
Route::delete('/menu/{id}', [App\Http\Controllers\MenuController::class, 'destroy']);


Route::get('/pelanggan/create', [App\Http\Controllers\PelangganController::class, 'create']);
Route::post('/pelanggan', [App\Http\Controllers\PelangganController::class, 'store']);
Route::get('/pelanggan/{id}/edit', [App\Http\Controllers\PelangganController::class, 'edit']);
Route::patch('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'update']);
Route::delete('/pelanggan/{id}', [App\Http\Controllers\PelangganController::class, 'destroy']);



Route::get('/transaksi/create', [App\Http\Controllers\TransaksiController::class, 'create']);
Route::post('/transaksi', [App\Http\Controllers\TransaksiController::class, 'store']);
Route::get('/transaksi/{id}/edit', [App\Http\Controllers\TransaksiController::class, 'edit']);
Route::patch('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'update']);
Route::get('/transaksi/{no}/detail', [App\Http\Controllers\TransaksiController::class, 'detail']);
Route::delete('/transaksi/{id}', [App\Http\Controllers\TransaksiController::class, 'destroy']);
Route::delete('/transaksi/{no}/detail', [App\Http\Controllers\TransaksiController::class, 'hapus']);
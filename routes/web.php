<?php

use App\Http\Controllers\c_produk;
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
// 
Route::get('/', [c_produk::class, 'login']);
Route::post('/proseslogin', [c_produk::class, 'index']);
//Register
Route::get('/register', [c_produk::class, 'reg']);
Route::post('/reg', [c_produk::class, 'register']);
//logic Logout
Route::post('/logout', [c_produk::class, 'logout']);
//View dashboard
Route::get('/dashboard', [c_produk::class, 'show']);
Route::get('/produk', [c_produk::class, 'produk']);
//Input
Route::get('/input', [c_produk::class, 'create']);
Route::post('/createData', [c_produk::class, 'store']);
//Edit Update
Route::get('/edit/{id}',[c_produk::class, 'edit']);
Route::post('/updateData/{id}',[c_produk::class, 'update']);
//Delete Hapus
Route::get('/hapus/{id}',[c_produk::class, 'destroy']);

Route::get('/tes', function () {
    return view('new');
});
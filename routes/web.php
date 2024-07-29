<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('login');
});
// admin
Route::get('/dasboard_admin', function () {
    return view('admin/dasboard');
});
Route::get('/penjualan', function () {
    return view('admin/penjualan');
});
Route::get('/daftar_pengguna', function () {
    return view('admin/pengguna');
});
Route::get('/daftar_broadcast', function () {
    return view('admin/broadcast');
});
Route::get('/dasboard_admin', function () {
    return view('admin/dasboard');
});
Route::get('/detail_broadcast', function () {
    return view('admin/detail_broadcast');
});
// pelanggan
Route::get('/dasboard', function () {
    return view('pelanggan/dasboard');
});
Route::get('/berlangganan', function () {
    return view('pelanggan/berlangganan');
});
Route::get('/broadcast', function () {
    return view('pelanggan/broadcast');
});
Route::get('/daftar_transaksi', function () {
    return view('pelanggan/daftar_transaksi');
});
Route::get('/kontak', function () {
    return view('pelanggan/kontak');
});
Route::get('/riwayat_broadcast', function () {
    return view('pelanggan/riwayat_broadcast');
});

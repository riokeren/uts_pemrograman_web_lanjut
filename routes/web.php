<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\homeControler;
use App\Http\Controllers\produkControler;
use Illuminate\Support\Facades\Route;

//Route::get('/', function () {
//  return view('index');
//});

//Route::get('produk', function () {
//    $kode_produk = ['BRG001', 'BRG002', 'BRG003', 'BRG004'];
//    $jumlah = count($kode_produk);
//    return view('produk', compact('kode_produk', 'jumlah'));
//});

Route::resource('/', homeControler::class);

Route::resource('produk', produkControler::class);

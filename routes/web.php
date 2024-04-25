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


Route::get('/about', function () {
    $nama = "fabio";
    $jk = "laki-laki";
    $alamat = "Jl.sangkuriang no3";
    $pendidikan = "SMK";
    $pekerjaan = "pilot";
    return view('biodata' , compact('nama','jk','alamat','pendidikan','pekerjaan'));
});

Route::get('/about2', function () {
    return view('home');
});

Route::get('/about3', function () {
    return view('kontak');
});


Route::get('/about1/{nama}/{jk}/{alamat}/{pendidikan}/{pekerjaan}', function (Request $request, $nama , $jk , $alamat, $pendidikan, $pekerjaan ) {
    $nama0 = $nama;
    $jk0 = $jk;
    $alamat0 = $alamat ;
    $pendidikan0 = $pendidikan;
    $pekerjaan0 = $pekerjaan;

    return view('param' , compact('nama0','jk0','alamat0','pendidikan0','pekerjaan0'));
});


<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('halaman_utama'[
        'iklan' => Kategori::all
    ]);
});
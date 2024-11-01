<?php

use App\Models\Iklan;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;

Route::get('/', function (){
    return view('halaman_utama', [
        'kategori' => Kategori::all()
        'iklan' => Iklan
    ]);
});
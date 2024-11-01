<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use App\Models\Jenis;
use App\Models\Kategori;
use Illuminate\Http\Request;

class searchController extends Controller
{
    public function search(Request $request){
        $kategori = Kategori::all(); // Mengambil semua kategori dari database
        return view('/admin/admin-kategori', [
            'kategori' => $kategori, 
            'title' => 'dashboard' // Mengatur title halaman
        ]);
    }

    public function search2(){
        return view('halaman_utama', [
            'kategori' => Kategori::all(), // Mengambil semua kategori
            'jenis' => Jenis::take(6)->get(), // Mengambil 6 jenis
            'iklan' => Iklan::all() // Mengambil semua iklan
        ]);
    }
}

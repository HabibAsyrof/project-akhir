<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Http\Request;

class adminController extends Controller
{
    public function admin(){
        $kategori = Kategori::all(); // Mengambil semua kategori dari database
        return view('/admin/admin-kategori', [
            'kategori' => $kategori, 
            'title' => 'dashboard' // Mengatur title halaman
        ]);
    }

    public function createKategori(){
        return view('admin/create-kategori', [
            'title' => 'add category' // Mengatur title halaman
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use GuzzleHttp\Psr7\Request as Psr7Request;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function tambah_kategori(Request $request){
        $validated = $request->validate([
            'series' => 'required|unique:kategoris',
            'image' => 'required|image|file|max:1024', // Nullable untuk memungkinkan tanpa upload gambar
        ]);
        // Cek apakah user mengupload gambar baru
        if ($request->hasFile('image')) {
              // Simpan gambar baru
            $validated['image'] = $request->file('image')->store('images');
        }
        Kategori::create($validated);
        // Redirect kembali dengan pesan sukses
        return redirect('/admin/')->with('success_update', 'Data berhasil diubah');
    }

}

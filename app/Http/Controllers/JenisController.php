<?php

namespace App\Http\Controllers;

// Mengimpor model Jenis dan kelas Request dari Laravel
use App\Models\Jenis;
use App\Models\Kategori;
use Illuminate\Http\Request;

class JenisController extends Controller
{
    // Fungsi untuk menambah jenis baru
    public function tambah_jenis(Request $request)
    {
        // dd($request->all());
        // Validasi input yang diterima dari pengguna
        $validated = $request->validate([
            'image' => 'required|image|file|max:1024', // Memastikan ada file gambar, bertipe image, dan maksimal 1MB
            'nama' => 'required|unique:jenis', // Nama harus ada dan unik dalam tabel jenis
            'harga' => 'required', // Harga harus ada
            'deskripsi' => 'required|max:1201',
            'kondisi' => 'required|max:1201',
            'kategori_id' => 'required', // Kategori ID harus ada
            'memori' => 'required|max:1209'
        ]);
        // Cek apakah ada file gambar yang diunggah
        if ($request->hasFile('image')) {
            // Simpan gambar ke folder 'foto' dan simpan nama file dalam variabel validated
            $validated['image'] = $request->file('image')->store('foto');
        }

        // Buat entri baru dalam tabel jenis dengan data yang telah divalidasi
        Jenis::create($validated);

        // Arahkan kembali ke halaman admin dengan pesan sukses
        return redirect('admin/jenis')->with('sucses_update', 'Data Berhasil ');
    }

    public function adminJenis()
    {
        $jenis = Jenis::all(); // Mengambil semua jenis dari database
        return view('/admin/admin-jenis', [
            'jenis' => $jenis,
            'title' => 'dashboard' // Mengatur title halaman
        ]);
    }

    public function adminJenis1()
    {
        return view('admin/create-jenis', [
            'title' => 'add category', // Mengatur title halaman
            'kategori' => Kategori::all(), // Mengambil semua kategori untuk ditampilkan di formulir
        ]);
    }

    public function jenis2(Request $request)
    {
        // Mengambil jenis berdasarkan kategori ID dari parameter rute
        return view('halaman-iphone', [
            'jenis' => Jenis::where('kategori_id', $request->route('id'))->get(), // Mengambil jenis yang terkait dengan kategori tertentu
            'kategori' => Kategori::all()
        ]);
    }

    public function jenis3(Request $request){
        return view("halaman-detail", [
            'jenis' => Jenis::where('id', $request->route('id'))->get(),
            'kategori' => kategori::all()
        ]);
    }
}

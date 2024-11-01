<?php

namespace App\Http\Controllers;

use App\Models\Iklan;
use Illuminate\Http\Request;

class IklanController extends Controller
{
    public function tambah_iklan(Request $request){
        $validated = $request->validate([
            'image' => 'required|image|file|max:1024',
        ]);
        if ($request->hasFile('image')) { 
            $validated['image'] = $request->file('image')->store('foto');
        }
        Iklan::create($validated);
        return redirect('/admin/iklan')->with('sucses_update', 'Data Berhasil ');
    }

    public function tambah_iklan1(){
        $iklan = Iklan::all(); // Mengambil semua iklan dari database
        return view('/admin/admin-iklan', [
            'iklan' => $iklan,
            'title' => 'dashboard' // Mengatur title halaman
        ]);
    }

    public function tambah_iklan2(){
        return view('admin/create-iklan', [
            'title' => 'add category' // Mengatur title halaman
        ]);
    }
}

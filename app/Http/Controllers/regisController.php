<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class regisController extends Controller
{
    public function register(Request $request){
        $request -> validate([
            'name' => 'required|string|max:50|alpha_dash',
            'email' => 'required|string|email|max:50|unique:users',
            'password' => 'required|string|min:5'
        ]);
        $data_user = User::create([
            'type' => 'user',
            'name' => $request->name,
            'email' => $request->email,
            'password'=> $request->password,
        ]);
        return redirect()->route('login')->with('sukses', 'akun anda sudah terdaftar');
    }
    public function admin(){
        return view('auth/signup');
    }
}

<?php

use App\Http\Controllers\adminController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\regisController;
use App\Http\Controllers\searchController;
use App\Models\Iklan;
use App\Models\Jenis;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

// Rute untuk menampilkan halaman Sign-In
Route::get('/Sign-In', [
    loginController::class,
    ('login')
])->middleware('guest')->name('login');

// Rute untuk menangani autentikasi pengguna
Route::post('/login', [
    loginController::class,
    'authenticate'
]);

// Rute untuk menampilkan halaman Sign-Up
Route::get('/Sign-Up', [
    regisController::class,
    'admin'
])->middleware('guest');

// Rute untuk menangani pendaftaran pengguna
Route::post('/register', [
    regisController::class,
    'register'
]);

// Rute untuk menampilkan dashboard admin setelah autentikasi
Route::get('/admin', [
    adminController::class,
    'admin'
])->middleware('auth')->name('halaman-utama'); // Hanya dapat diakses oleh pengguna yang terautentikasi

// Rute untuk menambah kategori baru
Route::post('/admin/create', [
    KategoriController::class,
    'tambah_kategori'
]);

// Rute untuk menampilkan halaman logout
Route::get('/logout', [
    loginController::class,
    'logout'
]);

// Rute untuk menampilkan halaman utama
Route::get('/', [
    searchController::class,
    'search2'
]);

// Rute untuk menampilkan formulir pembuatan kategori di admin
Route::get('/admin/kategori/create', [
    adminController::class,
    'createKategori'
]);

// Rute untuk menampilkan daftar jenis di admin
Route::get('/admin/jenis', [
    JenisController::class,
    'adminJenis'
]);
    
// Rute untuk menampilkan formulir pembuatan jenis
Route::get('/admin/jenis/create', [
    JenisController::class,
    'adminJenis1'
]);

// Rute untuk menambah jenis baru
Route::post('/admin/create-jenis', [
    JenisController::class,
    'tambah_jenis'
]);

// Rute untuk menampilkan daftar iklan di admin
Route::get('/admin/iklan', [
    IklanController::class,
    'tambah_iklan1'
]);

// Rute untuk menampilkan formulir pembuatan iklan
Route::get('/admin/iklan/create', [
    IklanController::class,
    'tambah_iklan2'
]);

// Rute untuk menambah iklan baru
Route::post('/admin/create-iklan', [
    IklanController::class,
    'tambah_iklan'
]);

// Rute untuk menampilkan halaman berdasarkan kategori iPhone
Route::get('/halaman-iphone/{id}', [
    JenisController::class,
    'jenis2'
]);


Route::get("halaman-detail/{id}", [
    JenisController::class,
    'jenis3'
]);

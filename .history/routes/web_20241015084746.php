

<!-- 
use App\Http\Controllers\loginController;
use App\Http\Controllers\regisController;
use App\Models\Iklan;
use App\Models\Jenis;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;
use Symfony\Component\CssSelector\Node\FunctionNode;

Route::get('/', function (){
    return view('halaman_utama', [
        'kategori' => Kategori::all(),
        'iklan' => Iklan::all(),
        'jenis' => Jenis::take(6)->get()
    ]);
}); 

Route::get('/Sign-In', function (){
    return view('auth/signin');
});

Route::get('/login', [
    loginController::class, ('login')
])->name('login')->middleware('guest');

Route::post('/login', [
    loginController::class, ('authenticate')
]);

Route::get('/Sign-Up', function(){
    return view('auth/signup');
}); -->


<?php

// Menggunakan controller dan model yang diperlukan
use App\Http\Controllers\IklanController;
use App\Http\Controllers\JenisController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\regisController;
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
    ('authenticate')
]);

// Rute untuk menampilkan halaman Sign-Up
Route::get('/Sign-Up', function () {
    return view('auth/signup'); // Mengembalikan tampilan signup
})->middleware('guest');

// Rute untuk menangani pendaftaran pengguna
Route::post('/register', [
    regisController::class,
    ('register')
]);

// Rute untuk menampilkan dashboard admin setelah autentikasi
Route::get('/admin', function () {
    $kategori = Kategori::all(); // Mengambil semua kategori dari database
    return view('/admin/admin-kategori', [
        'kategori' => $kategori, 
        'title' => 'dashboard' // Mengatur title halaman
    ]);
})->middleware('auth')->name('halaman-utama'); // Hanya dapat diakses oleh pengguna yang terautentikasi

// Rute untuk menambah kategori baru
Route::post('/admin/create', [
    KategoriController::class, 'tambah_kategori' 
]);

// Rute untuk menampilkan halaman logout
Route::get('/logout', [
    loginController::class, 'logout'
]);

// Rute untuk menampilkan halaman utama
Route::get('/', function (Request $request) {
    $search = $request->query('search');
    $jenis = Jenis::take(6)->get
    if($test) {

    }
    return view('halaman_utama', [
        'kategori' => Kategori::all(), // Mengambil semua kategori
        'jenis' => Jenis::take(6)->get(), // Mengambil 6 jenis
        'iklan' => Iklan::all() // Mengambil semua iklan
    ]);
});

// Rute untuk menampilkan formulir pembuatan kategori di admin
Route::get('/admin/kategori/create', function() {
    return view('admin/create-kategori', [
        'title' => 'add category' // Mengatur title halaman
    ]);
});

// Rute untuk menampilkan daftar jenis di admin
Route::get('/admin/jenis', function(){
    $jenis = Jenis::all(); // Mengambil semua jenis dari database
    return view('/admin/admin-jenis', [
        'jenis' => $jenis, 
        'title' => 'dashboard' // Mengatur title halaman
    ]);
});

// Rute untuk menampilkan formulir pembuatan jenis
Route::get('/admin/jenis/create', function() {
    return view('admin/create-jenis', [
        'title' => 'add category', // Mengatur title halaman
        'kategori' => Kategori::all(), // Mengambil semua kategori untuk ditampilkan di formulir
    ]);
});

// Rute untuk menambah jenis baru
Route::post('/admin/create-jenis', [
    JenisController::class, 'tambah_jenis' 
]);

// Rute untuk menampilkan daftar iklan di admin
Route::get('/admin/iklan', function(){
    $iklan = Iklan::all(); // Mengambil semua iklan dari database
    return view('/admin/admin-iklan', [
        'iklan' => $iklan, 
        'title' => 'dashboard' // Mengatur title halaman
    ]);
});

// Rute untuk menampilkan formulir pembuatan iklan
Route::get('/admin/iklan/create', function() {
    return view('admin/create-iklan', [
        'title' => 'add category' // Mengatur title halaman
    ]);
});

// Rute untuk menambah iklan baru
Route::post('/admin/create-iklan', [
    IklanController::class, 'tambah_iklan' 
]);

// Rute untuk menampilkan halaman berdasarkan kategori iPhone
Route::get('/halaman-iphone/{id}', function(Request $request) {
    // Mengambil jenis berdasarkan kategori ID dari parameter rute
    return view('halaman-iphone', [
        'jenis' => Jenis::where('kategori_id', $request->route('id'))->get(), // Mengambil jenis yang terkait dengan kategori tertentu
        'kategori' => Kategori::all()
    ]);
});








<?php

use App\Http\Controllers\loginController;
use App\Models\Iklan;
use App\Models\Jenis;
use App\Models\Kategori;
use Illuminate\Support\Facades\Route;


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










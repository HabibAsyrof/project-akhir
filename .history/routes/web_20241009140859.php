<? php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller
use App\Http\Controllers
use App\Http\Controllers\loginController
use App\Http\Controllers\regisController

Route::get('/Sign-Up',
use Symfony\Component\Mailer\Transport\Smtp\Auth\LoginAuthenticator;

 function () {
    return view('signup');
});

Route::get('/Sign-In', function () {
    return view('signin');
});

Route::get('/', [
    loginController::class, ('login')
])->name('login');

Route::post('/login', [
    loginController::class, ('authenticate')
]);

Route::get('/halaman-utama', function () {
    return view('halaman-utama');
})->middleware('auth')->name('');

Route::get('/logout', function () {
    return view('signin');
});
 
Route::get('/', function ($id) {
    
});

Route::get('/user', [LoginAuthenticator::class, 'index']);
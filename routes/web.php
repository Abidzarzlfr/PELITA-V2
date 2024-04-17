<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDokterRequestController;
use App\Http\Controllers\AdminLayananKesehatanController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DaftarDokterController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ForumKomunitasController;
use App\Http\Controllers\InformasiDokterController;
use App\Http\Controllers\KalkulatorStuntingController;
use App\Http\Controllers\KampanyeAcaraController;
use App\Http\Controllers\KebijakanProgramController;
use App\Http\Controllers\LayananKesehatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PanduanGiziController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\StatistikController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::group(['middleware' => 'guest'], function () {
    // Auth Routes

    Route::get('/', [BerandaController::class, 'index']);
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'register']);

    // Before Auth Routes

    Route::get('/about', [AboutController::class, 'index']);
    Route::get('/berita', [BeritaController::class, 'index']);
    Route::get('/layananKesehatan', [LayananKesehatanController::class, 'index']);
    Route::get('/panduanGizi', [PanduanGiziController::class, 'index']);
    Route::get('/kebijakanProgram', [KebijakanProgramController::class, 'index']);
    Route::get('/statistik', [StatistikController::class, 'index']);
    Route::get('/kalkulatorStunting', [KalkulatorStuntingController::class, 'index']);
    Route::get('/kampanyeAcara', [KampanyeAcaraController::class, 'index']);
});


Route::group(['middleware' => 'auth'], function () {

    // User Routes

    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile', [ProfileController::class, 'edit']);
    Route::put('/daftarDokter', [DaftarDokterController::class, 'daftar']);
    Route::get('/logout', [LogoutController::class, 'logout']);
    Route::get('/forumKomunitas', [ForumKomunitasController::class, 'index']);
    Route::get('/informasiDokter', [InformasiDokterController::class, 'index']);

    Route::get('/beranda/auth', [BerandaController::class, 'auth'])->name('berandaAuth');
    Route::get('/about/auth', [AboutController::class, 'auth']);
    Route::get('/berita/auth', [BeritaController::class, 'auth']);
    Route::get('/layananKesehatan/auth', [LayananKesehatanController::class, 'auth']);
    Route::get('/panduanGizi/auth', [PanduanGiziController::class, 'auth']);
    Route::get('/kebijakanProgram/auth', [KebijakanProgramController::class, 'auth']);
    Route::get('/statistik/auth', [StatistikController::class, 'auth']);
    Route::get('/kalkulatorStunting/auth', [KalkulatorStuntingController::class, 'auth']);
    Route::get('/kampanyeAcara/auth', [KampanyeAcaraController::class, 'auth']);

    // Dokter Routes
    Route::get('/dokter', [DokterController::class, 'index'])->name('dokter');


    // Admin Routes

    Route::get('/adminView', [AdminController::class, 'index'])->name('adminView');
    Route::get('/adminDokterRequest', [AdminDokterRequestController::class, 'index']);
    Route::post('/adminDokterRequest/{id}', [AdminDokterRequestController::class, 'confirmDokter'])->name('adminDokterRequest');
    Route::get('/adminBerita', [AdminBeritaController::class, 'index']);
    Route::get('/adminLayananKesehatan', [AdminLayananKesehatanController::class, 'index']);
});

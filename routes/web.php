<?php

use App\Http\Controllers\AcaraKesehatanBalitaController;
use App\Http\Controllers\AdminAcaraKesehatanBalitaController;
use App\Http\Controllers\AdminBeritaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDokterRequestController;
use App\Http\Controllers\AdminForumKomunitasController;
use App\Http\Controllers\AdminLokasiPelayananKesehatanController;
use App\Http\Controllers\AdminProgramKebijakanController;
use App\Http\Controllers\ArtikelPendidikanController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\DaftarDokterController;
use App\Http\Controllers\DetailAcaraKesehatanBalitaController;
use App\Http\Controllers\DetailArtikelPendidikanKesehatan;
use App\Http\Controllers\DetailBeritaController;
use App\Http\Controllers\DetailProgramKebijakanController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\ForumKomunitasController;
use App\Http\Controllers\GrafikGiziIndonesiaController;
use App\Http\Controllers\InformasiAhliGiziController;
use App\Http\Controllers\InformasiTerkiniController;
use App\Http\Controllers\KalkulatorGiziController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LokasiPelayananKesehatanController;
use App\Http\Controllers\MenuSehatBalitaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramKebijakanController;
use App\Http\Controllers\RegisterController;
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

    // ROUTE TERBARU BERDASARKAN DESAIN TERBARU
    Route::get('/informasiTerkini', [InformasiTerkiniController::class, 'index', 'showArtikels']);
    Route::get('/artikelPendidikanKesehatan', [ArtikelPendidikanController::class, 'index']);
    Route::get('/detailArtikelPendidikanKesehatan/{id}', [DetailArtikelPendidikanKesehatan::class, 'index']);
    Route::get('/programKebijakan', [ProgramKebijakanController::class, 'index']);
    Route::get('/detailProgramKebijakan/{id}', [DetailProgramKebijakanController::class, 'index']);
    Route::get('/acaraKesehatanBalita', [AcaraKesehatanBalitaController::class, 'index']);

    // Before Auth Routes
    Route::get('/informasiAhliGizi', [InformasiAhliGiziController::class, 'index']);
    Route::get('/berita', [BeritaController::class, 'index']);
    Route::get('/detailBerita/{id}', [DetailBeritaController::class, 'index']);
    Route::get('/lokasiPelayananKesehatan', [LokasiPelayananKesehatanController::class, 'index']);
    Route::get('/menuSehatBalita', [MenuSehatBalitaController::class, 'index']);
    Route::get('/grafikGiziIndonesia', [GrafikGiziIndonesiaController::class, 'index']);
    Route::get('/kalkulatorGizi', [KalkulatorGiziController::class, 'index']);
});


Route::group(['middleware' => 'auth'], function () {

    // User Routes
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile', [ProfileController::class, 'edit']);
    Route::put('/daftarDokter', [DaftarDokterController::class, 'daftar']);
    Route::get('/logout', [LogoutController::class, 'logout']);
    Route::get('/forumKomunitas', [ForumKomunitasController::class, 'index']);
    Route::get('/informasiAhliGizi/auth', [InformasiAhliGiziController::class, 'auth']);
    Route::get('/beranda/auth', [BerandaController::class, 'auth'])->name('berandaAuth');

    Route::get('/berita/auth', [BeritaController::class, 'auth']);
    Route::get('/detailBerita/auth/{id}', [DetailBeritaController::class, 'auth']);

    Route::get('/lokasiPelayananKesehatan/auth', [LokasiPelayananKesehatanController::class, 'auth']);
    Route::get('/menuSehatBalita/auth', [MenuSehatBalitaController::class, 'auth']);
    Route::get('/grafikGiziIndonesia/auth', [GrafikGiziIndonesiaController::class, 'auth']);
    Route::get('/kalkulatorGizi/auth', [KalkulatorGiziController::class, 'auth']);
    
    // ROUTE TERBARU BERDASARKAN DESAIN TERBARU
    Route::get('/informasiTerkini/auth', [InformasiTerkiniController::class, 'auth']);
    Route::get('/artikelPendidikanKesehatan/auth', [ArtikelPendidikanController::class, 'auth']);
    Route::get('/detailArtikelPendidikanKesehatan/auth/{id}', [DetailArtikelPendidikanKesehatan::class, 'index']);
    Route::get('/programKebijakan/auth', [ProgramKebijakanController::class, 'auth']);
    Route::get('/detailProgramKebijakan/auth/{id}', [DetailProgramKebijakanController::class, 'auth']);
    Route::get('/acaraKesehatanBalita/auth', [AcaraKesehatanBalitaController::class, 'auth']);
    Route::get('/detailAcaraKesehatanBalita/auth/{id}', [DetailAcaraKesehatanBalitaController::class, 'auth']);
    


    // Dokter Routes
    Route::get('/dokter', [DokterController::class, 'index'])->name('dokter');

    // Admin Routes
    Route::get('/adminView', [AdminController::class, 'index'])->name('adminView');
    Route::get('/adminDokterRequest', [AdminDokterRequestController::class, 'index']);
    Route::post('/adminDokterRequest/{id}', [AdminDokterRequestController::class, 'confirmDokter'])->name('adminDokterRequest');
    Route::get('/adminBerita', [AdminBeritaController::class, 'index']);
    Route::post('/adminUploadBerita', [AdminBeritaController::class, 'store'])->name('adminUploadBerita');
    Route::get('/adminLokasiPelayananKesehatan', [AdminLokasiPelayananKesehatanController::class, 'index']);
    Route::get('/adminProgramKebijakan', [AdminProgramKebijakanController::class, 'index']);
    Route::get('/adminForumKomunitas', [AdminForumKomunitasController::class, 'index']);
    Route::get('/adminAcaraKesehatanBalita', [AdminAcaraKesehatanBalitaController::class, 'index']);
});

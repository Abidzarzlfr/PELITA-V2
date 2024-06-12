<?php

use App\Http\Controllers\AcaraKesehatanBalitaController;
use App\Http\Controllers\AdminAcaraKesehatanBalitaController;
use App\Http\Controllers\AdminArtikelPendidikanKesehatanController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminDokterRequestController;
use App\Http\Controllers\AdminLokasiPelayananKesehatanController;
use App\Http\Controllers\AdminProgramKebijakanController;
use App\Http\Controllers\ArtikelPendidikanController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\DaftarDokterController;
use App\Http\Controllers\DaftarKonsultasiDokterController;
use App\Http\Controllers\DetailAcaraKesehatanBalitaController;
use App\Http\Controllers\DetailArtikelPendidikanKesehatan;
use App\Http\Controllers\DetailLokasiPelayananKesehatanController;
use App\Http\Controllers\DetailMenuSehatBalitaController;
use App\Http\Controllers\DetailProgramKebijakanController;
use App\Http\Controllers\DetailRekomendasiDokter;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\GrafikGiziIndonesiaController;
use App\Http\Controllers\InformasiDokterController;
use App\Http\Controllers\InformasiTerkiniController;
use App\Http\Controllers\KalkulatorGiziController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\LokasiPelayananKesehatanController;
use App\Http\Controllers\MenuSehatBalitaController;
use App\Http\Controllers\PortalArtikelDokterController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProgramKebijakanController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\RekomendasiDokterController;
use App\Models\AcaraKesehatanBalita;
use App\Models\LokasiPelayananKesehatan;
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
    Route::get('/artikelPendidikanKesehatan', [ArtikelPendidikanController::class, 'index'])->name('artikelPendidikanKesehatan');
    Route::get('/detailArtikelPendidikanKesehatan/{id}', [DetailArtikelPendidikanKesehatan::class, 'index']);
    Route::get('/programKebijakan', [ProgramKebijakanController::class, 'index'])->name('programKebijakan');
    Route::get('/detailProgramKebijakan/{id}', [DetailProgramKebijakanController::class, 'index']);
    Route::get('/acaraKesehatanBalita', [AcaraKesehatanBalitaController::class, 'index']);
    Route::get('/informasiDokter', [InformasiDokterController::class, 'index']);
    Route::get('/rekomendasiDokter', [RekomendasiDokterController::class, 'index']);
    Route::get('/lokasiPelayananKesehatan', [LokasiPelayananKesehatanController::class, 'index']);
    Route::get('/detailLokasiPelayananKesehatan/{id}', [DetailLokasiPelayananKesehatanController::class, 'index']);
    Route::get('/menuSehatBalita', [MenuSehatBalitaController::class, 'index']);
    Route::get('/detailMenuSehatBalita/{id}', [DetailMenuSehatBalitaController::class, 'index']);

    // Search Dokter
    Route::post('/searchDokter', [InformasiDokterController::class, 'searchDokter'])->name('searchDokter');
    Route::post('/searchDokterRekomendasi', [RekomendasiDokterController::class, 'searchDokter'])->name('searchDokterRekomendasi');

    // Search Artikel Kesehatan Balita
    Route::get('/searchArtikel', [ArtikelPendidikanController::class, 'searchArtikel'])->name('searchArtikel');

    // Search Program Kebijakan
    Route::get('/searchProgram', [ProgramKebijakanController::class, 'searchProgram'])->name('searchProgram');

    // Search Acara Kesehatan Balita
    Route::get('/searchAcara', [AcaraKesehatanBalitaController::class, 'searchAcara'])->name('searchAcara');

    // Filter Lokasi Pelayanan Kesehatan
    Route::get('/filterLokasi', [LokasiPelayananKesehatanController::class, 'filterLokasi'])->name('filterLokasi');

    // Before Auth Routes
    Route::get('/grafikGiziIndonesia', [GrafikGiziIndonesiaController::class, 'index']);

    // Kalkulator
    Route::get('/kalkulatorGizi', [KalkulatorGiziController::class, 'index']);
    Route::post('/kalkulatorGizi', [KalkulatorGiziController::class, 'handlePost']);
});


Route::group(['middleware' => 'auth'], function () {

    // User Routes
    Route::get('/profile', [ProfileController::class, 'index']);
    Route::put('/profile', [ProfileController::class, 'edit']);
    Route::put('/daftarDokter', [DaftarDokterController::class, 'daftar']);
    Route::get('/logout', [LogoutController::class, 'logout']);
    Route::get('/informasiDokter/auth', [InformasiDokterController::class, 'auth']);
    Route::get('/beranda/auth', [BerandaController::class, 'auth'])->name('berandaAuth');

    Route::get('/grafikGiziIndonesia/auth', [GrafikGiziIndonesiaController::class, 'auth']);
    Route::get('/kalkulatorGizi/auth', [KalkulatorGiziController::class, 'auth']);

    // ROUTE TERBARU BERDASARKAN DESAIN TERBARU
    Route::get('/informasiTerkini/auth', [InformasiTerkiniController::class, 'auth']);
    Route::get('/artikelPendidikanKesehatan/auth', [ArtikelPendidikanController::class, 'auth'])->name('artikelPendidikanKesehatanAuth');
    Route::get('/detailArtikelPendidikanKesehatan/auth/{id}', [DetailArtikelPendidikanKesehatan::class, 'index']);
    Route::get('/programKebijakan/auth', [ProgramKebijakanController::class, 'auth'])->name('programKebijakanAuth');
    Route::get('/detailProgramKebijakan/auth/{id}', [DetailProgramKebijakanController::class, 'auth']);
    Route::get('/acaraKesehatanBalita/auth', [AcaraKesehatanBalitaController::class, 'auth']);
    Route::get('/detailAcaraKesehatanBalita/auth/{id}', [DetailAcaraKesehatanBalitaController::class, 'auth']);
    Route::get('/rekomendasiDokter/auth', [RekomendasiDokterController::class, 'auth']);
    Route::get('/detailRekomendasiDokter/auth/{id}', [DetailRekomendasiDokter::class, 'auth']);
    Route::get('/lokasiPelayananKesehatan/auth', [LokasiPelayananKesehatanController::class, 'auth']);
    Route::get('/detailLokasiPelayananKesehatan/auth/{id}', [DetailLokasiPelayananKesehatanController::class, 'auth']);
    Route::get('/menuSehatBalita/auth', [MenuSehatBalitaController::class, 'auth']);
    Route::get('/detailMenuSehatBalita/auth/{id}', [DetailMenuSehatBalitaController::class, 'auth']);

    // Search Dokter
    Route::post('/searchDokter/auth', [InformasiDokterController::class, 'searchDokter'])->name('searchDokterAuth');
    Route::post('/searchDokterRekomendasi/auth', [RekomendasiDokterController::class, 'searchDokter'])->name('searchDokterRekomendasiAuth');

    // Search Artikel
    Route::get('/searchArtikel/auth', [ArtikelPendidikanController::class, 'searchArtikel'])->name('searchArtikelAuth');

    // Search Program Kebijakan
    Route::get('/searchProgram/auth', [ProgramKebijakanController::class, 'searchProgram'])->name('searchProgramAuth');

    // Search Acara Kesehatan Balita
    Route::get('/searchAcara/auth', [AcaraKesehatanBalitaController::class, 'searchAcara'])->name('searchAcaraAuth');

    // Filter Lokasi Pelayanan Kesehatan
    Route::get('/filterLokasi/auth', [LokasiPelayananKesehatanController::class, 'filterLokasi'])->name('filterLokasiAuth');

    // Daftar Konsultasi
    Route::post('/daftarKonsultasi', [DaftarKonsultasiDokterController::class, 'daftarKonsultasi'])->name('daftarKonsultasi');

    // Dokter Routes --------------------------------
    Route::get('/dokter', [DokterController::class, 'index'])->name('dokter');
    Route::post('/confirmKonsultasi/{id}', [DokterController::class, 'confirmKonsultasi'])->name('confirmKonsultasi');
    Route::post('/rejectedKonsultasi/{id}', [DokterController::class, 'rejected'])->name('rejectedKonsultasi');
    Route::get('/portalArtikelDokter', [PortalArtikelDokterController::class, 'index'])->name('portalArtikelDokter');
    Route::post('/dokterUploadArtikelPendidikanKesehatan', [PortalArtikelDokterController::class, 'store'])->name('dokterUploadArtikelPendidikanKesehatan');
    Route::delete('/dokterDeleteArtikelPendidikanKesehatan/{id}', [PortalArtikelDokterController::class, 'delete'])->name('dokterDeleteArtikelPendidikanKesehatan');
    Route::put('/dokterUpdateArtikelPendidikanKesehatan', [PortalArtikelDokterController::class, 'update'])->name('dokterUpdateArtikelPendidikanKesehatan');

    // Admin Routes (Dashboard) --------------------------------
    Route::get('/adminView', [AdminController::class, 'index'])->name('adminView');
    Route::delete('/adminDeleteUser/{id}', [AdminController::class, 'delete'])->name('adminDeleteUser');
    Route::put('/adminUpdateUser', [AdminController::class, 'update'])->name('adminUpdateUser');

    // Admin Routes (Dokter Request) --------------------------------
    Route::get('/adminDokterRequest', [AdminDokterRequestController::class, 'index']);
    Route::post('/adminDokterRequest', [AdminDokterRequestController::class, 'confirmDokter'])->name('adminDokterRequest');
    Route::post('/adminDokterRejected', [AdminDokterRequestController::class, 'rejectedDokter'])->name('adminDokterRejected');

    // Admin Routes (Program Kebijakan) --------------------------------
    Route::get('/adminProgramKebijakan', [AdminProgramKebijakanController::class, 'index']);
    Route::post('/adminUploadProgramKebijakan', [AdminProgramKebijakanController::class, 'store'])->name('adminUploadProgramKebijakan');
    Route::delete('/adminDeleteProgramKebijakan/{id}', [AdminProgramKebijakanController::class, 'delete'])->name('adminDeleteProgramKebijakan');
    Route::put('/adminUpdateProgramKebijakan', [AdminProgramKebijakanController::class, 'update'])->name('adminUpdateProgramKebijakan');

    Route::get('/adminAcaraKesehatanBalita', [AdminAcaraKesehatanBalitaController::class, 'index']);
    Route::post('/adminUploadAcaraKesehatanBalita', [AdminAcaraKesehatanBalitaController::class, 'store'])->name('adminUploadAcaraKesehatan');

    Route::get('/adminArtikelPendidikanKesehatan', [AdminArtikelPendidikanKesehatanController::class, 'index']);
    Route::post('/adminUploadArtikelPendidikanKesehatan', [AdminArtikelPendidikanKesehatanController::class, 'store'])->name('adminUploadArtikelPendidikanKesehatan');

    Route::get('/adminLokasiPelayananKesehatan', [AdminLokasiPelayananKesehatanController::class, 'index']);
});

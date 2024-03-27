<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BerandaController;
use App\Http\Controllers\BeritaController;
use App\Http\Controllers\KalkulatorStuntingController;
use App\Http\Controllers\KebijakanProgramController;
use App\Http\Controllers\LayananKesehatanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PanduanGiziController;
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
    // Route::get('/', function () {
    //     return view('Beranda');
    // });
    Route::get('/', [BerandaController::class, 'index']);

    // Route::get('/login', function () {
    //     return view('auth.Login');
    // });

    Route::get('/login', [LoginController::class, 'index']);
    Route::post('/login', [LoginController::class, 'login']);

    // Route::get('/register', function () {
    //     return view('auth.Register');
    // });

    Route::get('/register', [RegisterController::class, 'index']);
    Route::post('/register', [RegisterController::class, 'register']);

    // layouts

    // Route::get('/about', function () {
    //     return view('layouts.About');
    // });

    Route::get('/about', [AboutController::class, 'index']);

    // Route::get('/berita', function () {
    //     return view('layouts.Berita');
    // });
    
    Route::get('/berita', [BeritaController::class, 'index']);

    // Route::get('/layananKesehatan', function () {
    //     return view('layouts.informasi-kesehatan.LayananKesehatan');
    // });

    Route::get('/layananKesehatan', [LayananKesehatanController::class, 'index']);

    // Route::get('/panduanGizi', function () {
    //     return view('layouts.informasi-kesehatan.PanduanGizi');
    // });
    
    Route::get('/panduanGizi', [PanduanGiziController::class, 'index']);

    // Route::get('/kebijakanProgram', function () {
    //     return view('layouts.informasi-kesehatan.KebijakanProgram');
    // });

    Route::get('/kebijakanProgram', [KebijakanProgramController::class, 'index']);

    // Route::get('/statistik', function () {
    //     return view('layouts.informasi-kesehatan.Statistik');
    // });

    Route::get('/statistik', [StatistikController::class, 'index']);

    // Route::get('/kalkulatorStunting', function () {
    //     return view('layouts.informasi-kesehatan.KalkulatorStunting');
    // });

    Route::get('/kalkulatorStunting', [KalkulatorStuntingController::class, 'index']);

    Route::get('/kampanyeAcara', function () {
        return view('layouts.informasi-kesehatan.KampanyeAcara');
    });
});


Route::group(['middleware' => 'auth'], function () {
    Route::get('/logout', [LogoutController::class, 'logout']);

    Route::get('/forumKomunitas', function () {
        return view('layouts.ForumKomunitas');
    });

    Route::get('/beranda/auth', [BerandaController::class, 'auth']);
    Route::get('/about/auth', [AboutController::class, 'auth']);
    Route::get('/berita/auth', [BeritaController::class, 'auth']);
    Route::get('/layananKesehatan/auth', [LayananKesehatanController::class, 'auth']);
    Route::get('/panduanGizi/auth', [PanduanGiziController::class, 'auth']);
    Route::get('/kebijakanProgram/auth', [KebijakanProgramController::class, 'auth']);
    Route::get('/statistik/auth', [StatistikController::class, 'auth']);
    Route::get('/kalkulatorStunting/auth', [KalkulatorStuntingController::class, 'auth']);
});

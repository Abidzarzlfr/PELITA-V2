<?php

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

// Route::get('/', function () {
//     return view('beranda');
// });

Route::group(['middleware' => 'guest'], function () {
    Route::get('/', function () {
        return view('Beranda');
    });

    Route::get('/login', function () {
        return view('auth.Login');
    });

    // Route::get('/login', [LoginController::class, 'index']);
    // Route::post('/login', [LoginController::class, 'login']);

    Route::get('/register', function () {
        return view('auth.Register');
    });

    // layouts
    Route::get('/about', function () {
        return view('layouts.About');
    });
    Route::get('/berita', function () {
        return view('layouts.Berita');
    });
    Route::get('/layananKesehatan', function () {
        return view('layouts.informasi-kesehatan.LayananKesehatan');
    });
    Route::get('/panduanGizi', function () {
        return view('layouts.informasi-kesehatan.PanduanGizi');
    });
    Route::get('/kebijakanProgram', function () {
        return view('layouts.informasi-kesehatan.KebijakanProgram');
    });
    Route::get('/statistik', function () {
        return view('layouts.informasi-kesehatan.Statistik');
    });
    Route::get('/kalkulatorStunting', function () {
        return view('layouts.informasi-kesehatan.KalkulatorStunting');
    });
    Route::get('/kampanyeAcara', function () {
        return view('layouts.informasi-kesehatan.KampanyeAcara');
    });
    Route::get('/forumKomunitas', function () {
        return view('layouts.ForumKomunitas');
    });
});


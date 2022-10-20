<?php

// use App\Models\agendaSuratMasuk;

use App\Http\Controllers\AgendaSuratMasukController;
use App\Http\Controllers\InstansiController;
use App\Http\Controllers\SekdaController;
use App\Http\Controllers\SuratController;
use App\Http\Controllers\SuratKeluarController;
use App\Http\Controllers\suratTugasController;
use App\Http\Controllers\updateSuratKeluar;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        'title' => 'Home'
    ]);
});

Route::resource('/agenda-surat-masuk', AgendaSuratMasukController::class);

Route::resource('/surat-keluar', SuratKeluarController::class);

Route::resource('/surat-keluar', SuratKeluarController::class);

Route::resource('/surat-sekda', SekdaController::class);

Route::resource('/instansi', InstansiController::class);

Route::resource('/surat-tugas', suratTugasController::class);

// Route::POST('/update', updateSuratKeluar::class);

// Route::resource('/agenda-surat-masuk/{{$surat->id}}', AgendaSuratMasukController::class);
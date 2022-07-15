<?php

// use App\Models\agendaSuratMasuk;

use App\Http\Controllers\AgendaSuratMasukController;
use App\Http\Controllers\SuratController;
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
    return view('home',[
        'title' => 'Home'
    ]);
});

Route::resource('/agenda-surat-masuk', AgendaSuratMasukController::class);

// Route::resource('/agenda-surat-masuk/{{$surat->id}}', AgendaSuratMasukController::class);




<?php

use App\Http\Controllers\MahasiswaController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::prefix('mahasiswa')->group(function () {
    
    Route::get('pendaftaran', function () {
        echo "<h2>Halaman Pendaftaran</h2>";
    });

    Route::get('ujian', function () {
        echo "<h2>Halaman Ujian</h2>";
    });
    
    Route::get('nilai', function () {
        echo "<h2>Halaman Nilai</h2>";
    });
    
});

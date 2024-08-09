<?php

use App\Http\Controllers\PendudukController;
use App\Http\Controllers\SembakoController;
use App\Http\Controllers\TunaiController;
use App\Http\Controllers\RumahController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PDFController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('template.master');
});

Route::get('/', function () {
    return view('home');
});

Route::resource('penduduk',PendudukController::class);

// Route::get('/sembako', function () {
//     return view('sembako.sembako');
//     // echo "Data Sembako";
// })->name('datasembako');

Route::resource('sembako',SembakoController::class);

// Route::get('/tunai', function () {
//     return view('tunai.tunai');
//     // echo "Data BLT";
// })->name('datablt');

Route::resource('tunai',TunaiController::class);


// Route::get('/rumah', function () {
//     return view('rumah.rumah');
//     // echo "Bedah Rumah";
// })->name('bedahrumah');

Route::resource('rumah', RumahController::class);

Route::get('cetak', [PDFController::class, 'cetakPDF']);
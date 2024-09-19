<?php

use App\Exports\DosenExport;
use App\Exports\MahasiswaExport;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\MahasiswaController;
use Illuminate\Support\Facades\Route;
use Maatwebsite\Excel\Facades\Excel;

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

Route::get('/mahasiswas', [MahasiswaController::class, 'index']);
Route::get('/dosens', [DosenController::class, 'index']);
Route::get('/kelas', [KelasController::class, 'index']);

// Ini untuk export
Route::get('/export-mahasiswas', function () {
    return Excel::download(new MahasiswaExport, 'mahasiswas.xlsx');
});

Route::get('/export-dosens', function () {
    return Excel::download(new DosenExport, 'dosens.xlsx');
});

<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Mengambil semua data mahasiswa
        $mahasiswas = Mahasiswa::all();

        // Mengirim data ke view
        return view('mahasiswas.index', compact('mahasiswas'));
    }
}

<?php

namespace Database\Seeders;

use App\Models\Dosen;
use App\Models\Kelas;
use App\Models\Mahasiswa;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $dosen = Dosen::inRandomOrder()->first();

        // Buat beberapa kelas yang terhubung dengan dosen yang berbeda-beda
        for ($i = 1; $i <= 3; $i++) {
            $kelas = Kelas::create([
                'nama_kelas' => 'Kelas ' . $i,
                'dosen_id' => $dosen->id
            ]);

            // Ambil beberapa mahasiswa secara acak
            $mahasiswas = Mahasiswa::inRandomOrder()->take(3)->get();

            // Hubungkan mahasiswa dengan kelas
            $kelas->mahasiswas()->attach($mahasiswas->pluck('id')->toArray());
        }
    }
}

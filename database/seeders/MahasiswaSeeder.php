<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Mahasiswa;

class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Mahasiswa::create([
            'nama' => 'Muhamad Alif Anwar',
            'nim' => 'A11.2021.13717',
            'tahun_masuk' => 2021
        ]);

        Mahasiswa::create([
            'nama' => 'Jane Smith',
            'nim' => '87654321',
            'tahun_masuk' => 2019
        ]);

        Mahasiswa::create([
            'nama' => 'Alice Brown',
            'nim' => '11223344',
            'tahun_masuk' => 2021
        ]);
    }
}

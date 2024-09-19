<?php

namespace Database\Seeders;

use App\Models\Dosen;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DosenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Dosen::create([
            'nama_dosen' => 'Dr. John Doe',
            'npp' => '12345678',
            'email' => 'john.doe@example.com',
        ]);

        Dosen::create([
            'nama_dosen' => 'Prof. Jane Smith',
            'npp' => '87654321',
            'email' => 'jane.smith@example.com',
        ]);
    }
}

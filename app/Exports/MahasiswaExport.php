<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class MahasiswaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        // Mengambil semua data mahasiswa
        return Mahasiswa::select('id', 'nama', 'nim', 'tahun_masuk')->get();
    }

    /**
     * Menambahkan heading pada Excel
     */
    public function headings(): array
    {
        return [
            'ID',
            'Nama',
            'NIM',
            'Tahun Masuk'
        ];
    }
}

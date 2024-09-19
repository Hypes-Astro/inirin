<?php

namespace App\Exports;

use App\Models\Mahasiswa;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;


// Hallo rinrin, coba fokus walo ngantuk. jangan lupa tambahin WithHeading itu buat ngebantu dalam memberikan header di kolom excel nanti

class MahasiswaExport implements FromCollection, WithHeadings
{
    /**
     * @return \Illuminate\Support\Collection
     */


    // RinRin : collection ini untuk get colom dari database
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

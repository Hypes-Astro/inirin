<?php

namespace App\Exports;

use App\Models\Dosen;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class DosenExport implements FromCollection, WithHeadings
{
    public function collection()
    {
        return Dosen::select('id', 'nama_dosen', 'npp', 'email')->get();
    }

    public function headings(): array
    {
        return [
            'ID',
            'Nama Dosen',
            'NPP',
            'Email'
        ];
    }
}

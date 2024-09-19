<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = ['nama_kelas', 'dosen_id'];

    // Relasi ke dosen (many-to-one)
    public function dosen()
    {
        return $this->belongsTo(Dosen::class);
    }

    // Relasi ke mahasiswa (many-to-many)
    public function mahasiswas()
    {
        return $this->belongsToMany(Mahasiswa::class, 'kelas_mahasiswa');
    }
}

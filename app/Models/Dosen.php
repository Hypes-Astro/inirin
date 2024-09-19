<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dosen extends Model
{
    use HasFactory;
    protected $fillable = ['nama_dosen', 'npp', 'email'];

    // Relasi one-to-many ke kelas
    public function kelas()
    {
        return $this->hasMany(Kelas::class);
    }
}

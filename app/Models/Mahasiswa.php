<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = [
        'nim',
        'nama_lengkap',
        'jurusan_id',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat_lengkap',
        
    ];

    public function jurusan()
    {
        return $this->belongsTo(Jurusan::class);
    }
}

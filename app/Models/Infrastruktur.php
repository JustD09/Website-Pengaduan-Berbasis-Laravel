<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Infrastruktur extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_ruas',
        'panjang_km',
        'lebar_m',
        'kondisi_jalan',
        'status_jalan',
        'kelas_jalan',
    ];
}

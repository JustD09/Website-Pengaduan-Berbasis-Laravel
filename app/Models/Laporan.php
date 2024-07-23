<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laporan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_pelapor',
        'nama_ruas',
        'panjang_kerusakan',
        'lebar_kerusakan',
        'kondisi_jalan',
        'image',
        'status',
    ];
}

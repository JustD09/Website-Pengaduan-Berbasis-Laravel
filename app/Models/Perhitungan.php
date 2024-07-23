<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perhitungan extends Model
{
    use HasFactory;
    protected $fillable = [
        'inisial',
        'arrival_time',
        'burst_time',
        'start_time',
        'finish_time',
        'waiting_time',
        'turn_around_time'
    ];
}

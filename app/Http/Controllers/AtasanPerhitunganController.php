<?php

namespace App\Http\Controllers;

use App\Models\Perhitungan;
use Illuminate\Http\Request;

class AtasanPerhitunganController extends Controller
{
     public function index()
    {
        $atasanPerhitungan = Perhitungan::orderBy('arrival_time')->get();
        $currentTime = '10:00'; // waktu mulai simulasi

        foreach ($atasanPerhitungan as $atasanPerhitungans) {
            $startTime = $currentTime;
            $finishTime = date('H:i', strtotime($startTime) + $atasanPerhitungans->burst_time * 60);
            $waitingTime = (strtotime($startTime) - strtotime($atasanPerhitungans->arrival_time)) / 60;
            $turnAroundTime = $waitingTime + $atasanPerhitungans->burst_time;

            $atasanPerhitungans->update([
                'start_time' => $startTime,
                'finish_time' => $finishTime,
                'waiting_time' => $waitingTime,
                'turn_around_time' => $turnAroundTime
            ]);

            $currentTime = $finishTime;
        }

        // Mengambil semua data perhitungan untuk ditampilkan di view
        $results = Perhitungan::all();

        $totalBurstTime = $results->sum('burst_time');
        $totalWaitingTime = $results->sum('waiting_time');
        $totalTurnAroundTime = $results->sum('turn_around_time');
        
        // Menghindari pembagian dengan nol
        $averageWaitingTime = $results->count() ? $totalWaitingTime / $results->count() : 0;
        $averageTurnAroundTime = $results->count() ? $totalTurnAroundTime / $results->count() : 0;

        return view('atasanPerhitungan.index', compact('atasanPerhitungan', 'totalBurstTime', 'totalWaitingTime', 'totalTurnAroundTime', 'averageWaitingTime', 'averageTurnAroundTime'));
    }
}

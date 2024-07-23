<?php

namespace App\Http\Controllers;

use App\Models\Perhitungan;
use Illuminate\Http\Request;

class PerhitunganController extends Controller
{
    public function index()
    {
        $perhitungan = Perhitungan::orderBy('arrival_time')->get();
        $currentTime = '10:00'; // waktu mulai simulasi

        foreach ($perhitungan as $perhitungans) {
            $startTime = $currentTime;
            $finishTime = date('H:i', strtotime($startTime) + $perhitungans->burst_time * 60);
            $waitingTime = (strtotime($startTime) - strtotime($perhitungans->arrival_time)) / 60;
            $turnAroundTime = $waitingTime + $perhitungans->burst_time;

            $perhitungans->update([
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

        return view('perhitungan.index', compact('perhitungan', 'totalBurstTime', 'totalWaitingTime', 'totalTurnAroundTime', 'averageWaitingTime', 'averageTurnAroundTime'));
    }

    public function create()
    {
        return view('perhitungan.create');
    }

    public function store(Request $request)
    {
        Perhitungan::create($request->all());
        return redirect()->route('perhitungan.store');
    }

    public function show(Perhitungan $perhitungan)
    {
        return view('perhitungan.show', compact('perhitungan'));
    }

    public function edit(Perhitungan $perhitungan)
    {
        return view('perhitungan.edit', compact('perhitungan'));
    }

    public function update(Request $request, Perhitungan $perhitungan)
    {
        $perhitungan->update($request->all());
        return redirect()->route('perhitungan.index');
    }

    public function destroy(Perhitungan $perhitungan)
    {
        $perhitungan->delete();
        return redirect()->route('perhitungan.index');
    }
}


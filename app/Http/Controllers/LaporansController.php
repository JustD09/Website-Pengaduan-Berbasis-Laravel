<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Laporan;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;

class LaporansController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $laporans = Laporan::orderBy('created_at', 'DESC')->get();
  
        return view('laporans.index', compact('laporans'));
    }

    public function create()
    {
        return view('laporan.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_pelapor' => 'required|string|max:255',
            'nama_ruas' => 'required|string|max:255',
            'panjang_kerusakan' => 'required|string|max:255',
            'lebar_kerusakan' => 'required|string|max:255',
            'kondisi_jalan' => 'required|string|max:255',
            'image' => 'required|image|max:2048',
        ]);

        $laporan = new Laporan();
        $laporan->nama_pelapor = $validated['nama_pelapor'];
        $laporan->nama_ruas = $validated['nama_ruas'];
        $laporan->panjang_kerusakan = $validated['panjang_kerusakan'];
        $laporan->lebar_kerusakan = $validated['lebar_kerusakan'];
        $laporan->kondisi_jalan = $validated['kondisi_jalan'];
        $laporan->status = 'Dalam Pemeriksaan Petugas';

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $laporan->image = $imageName;
        }

        $laporan->save();

        return redirect()->route('laporan')->with('success', 'Data berhasil ditambahkan!');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $laporans = Laporan::findOrFail($id);
  
        return view('laporans.show', compact('laporans'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $laporans = Laporan::findOrFail($id);
  
        return view('laporans.edit', compact('laporans'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $laporans = Laporan::findOrFail($id);
  
        $laporans->update($request->all());
  
        return redirect()->route('laporans')->with('warning', 'DATA BERHASIL DI UPDATE !');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $laporans = Laporan::findOrFail($id);
  
        $laporans->delete();
  
        return redirect()->route('laporans')->with('danger', 'DATA BERHASIL DIHAPUS !');
    }

    public function download(string $id)
    {
        $laporans = Laporan::findOrFail($id);

        if ($laporans->image) {
            $filePath = $laporans->image;

            Log::info('Trying to download file at path: ' . $filePath);

            if (Storage::disk('public')->exists($filePath)) {
                return Storage::disk('public')->download($filePath);
            } else {
                return redirect()->route('laporans')->with('error', 'File tidak ditemukan di storage! Path: ' . $filePath);
            }
        }

        return redirect()->route('laporans')->with('error', 'Path file tidak ditemukan di database!');
    }
}

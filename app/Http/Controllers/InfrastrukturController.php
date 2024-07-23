<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Infrastruktur;

class InfrastrukturController extends Controller
{
    /**
     * Display a listing of the resource. 
     */
    public function index()
    {
        $infrastruktur = Infrastruktur::orderBy('created_at', 'DESC')->get();
  
        return view('infrastruktur.index', compact('infrastruktur'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('infrastruktur.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_ruas' => 'required|string|max:255',
            'panjang_km' => 'required|string|max:100',
            'lebar_m' => 'required|string|max:100',
            'kondisi_jalan' => 'required|string|max:255',
            'status_jalan' => 'required|string|max:255',
            'kelas_jalan' => 'required|string|max:255',
        ]);

        $infrastruktur = new Infrastruktur();
        $infrastruktur->nama_ruas = $validated['nama_ruas'];
        $infrastruktur->panjang_km = $validated['panjang_km'];
        $infrastruktur->lebar_m = $validated['lebar_m'];
        $infrastruktur->kondisi_jalan = $validated['kondisi_jalan'];
        $infrastruktur->status_jalan = $validated['status_jalan'];
        $infrastruktur->kelas_jalan = $validated['kelas_jalan'];

        $infrastruktur->save();
 
        return redirect()->route('infrastruktur')->with('success', 'DATA BERHASIL DITAMBAHKAN !');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $infrastruktur = Infrastruktur::findOrFail($id);
  
        return view('infrastruktur.show', compact('infrastruktur'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $infrastruktur = Infrastruktur::findOrFail($id);
  
        return view('infrastruktur.edit', compact('infrastruktur'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $infrastruktur = Infrastruktur::findOrFail($id);
  
        $infrastruktur->update($request->all());
  
        return redirect()->route('infrastruktur')->with('warning', 'DATA BERHASIL DI UPDATE !');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $infrastruktur = Infrastruktur::findOrFail($id);
  
        $infrastruktur->delete();
  
        return redirect()->route('infrastruktur')->with('danger', 'DATA BERHASIL DIHAPUS !');
    }
}

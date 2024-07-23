@extends('layouts.app')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">DATA INVENTARIS JALAN</h4>
            <p class="card-description"> DATA INVENTARIS JALAN
            DI WILAYAH UPTD JALAN DAN JEMBATAN KOTA PALEMBANG </p>
            <form action="{{ route('infrastruktur.store') }}" method="POST" enctype="multipart/form-data" class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="nama_ruas">Nama Ruas</label>
                    <input name="nama_ruas" type="text" class="form-control" id="nama_ruas" placeholder="Nama Ruas">
                </div>
                <div class="form-group">
                    <label for="panjang_km">Panjang (Km)</label>
                    <input name="panjang_km" type="text" class="form-control" id="panjang_km" placeholder="Panjang (km)">
                </div>
                <div class="form-group">
                    <label for="lebar_m">Lebar (m)</label>
                    <input name="lebar_m" type="text" class="form-control" id="lebar_m" placeholder="Lebar (m)">
                </div>
                <div class="form-group">
                    <label for="kondisi_jalan">Kondisi Jalan</label>
                    <input name="kondisi_jalan" type="text" class="form-control" id="kondisi_jalan" placeholder="Kondisi Jalan">
                </div>
                <div class="form-group">
                    <label for="status_jalan">Status Jalan</label>
                    <input name="status_jalan" type="text" class="form-control" id="status_jalan" placeholder="Status Jalan">
                </div>
                <div class="form-group">
                    <label for="kelas_jalan">Kelas Jalan</label>
                    <input name="kelas_jalan" type="text" class="form-control" id="kelas_jalan" placeholder="Kelas Jalan">
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Buat Data</button>
            </form>
        </div>
    </div>
</div>
@endsection
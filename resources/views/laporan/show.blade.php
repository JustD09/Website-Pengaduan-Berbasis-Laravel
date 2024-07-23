@extends('layouts.app')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Laporan Pengaduan Masyarakat</h4>
            <p class="card-description"> Isi formulir untuk mengajukan pengaduan pada infrastruktur jalan </p>
            <div class="form-group">
                <label for="nama_pelapor">Nama Pelapor</label>
                <input name="nama_pelapor" type="text" class="form-control" id="nama_pelapor" disabled
                    value="{{ $laporan->nama_pelapor}}">
            </div>
            <div class="form-group">
                <label for="nama_ruas">Nama Ruas</label>
                <input name="nama_ruas" type="text" class="form-control" id="nama_ruas" disabled
                    value="{{ $laporan->nama_ruas}}">
            </div>
            <div class="form-group">
                <label for="panjang_kerusakan">Panjang Kerusakan</label>
                <input name="panjang_kerusakan" type="text" class="form-control" id="panjang_kerusakan" disabled
                    value="{{ $laporan->panjang_kerusakan}}">
            </div>
            <div class="form-group">
                <label for="lebar_kerusakan">Lebar Kerusakan</label>
                <input name="lebar_kerusakan" type="text" class="form-control" id="lebar_kerusakan" disabled
                    value="{{ $laporan->lebar_kerusakan}}">
            </div>
            <div class="form-group">
                <label for="kondisi_jalan">Kondisi Jalan</label>
                <input name="kondisi_jalan" type="text" class="form-control" id="kondisi_jalan" disabled
                    value="{{ $laporan->kondisi_jalan}}">
            </div>
            <div class="form-group">
                <label for="status">Status</label>
                <input name="status" type="text" class="form-control" id="status" disabled
                    value="{{ $laporan->status}}">
            </div>
            <div class="form-group">
                <label for="image">Foto Kondisi Jalan</label>
                <img name="image" type="img" class="form-control" id="image" disabled
                    src="{{ asset('images/' . $laporan->image) }}" alt="Kerusakan" width="100">
            </div>
        </div>
    </div>
</div>
@endsection
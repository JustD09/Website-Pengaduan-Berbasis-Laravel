@extends('layouts.app')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Laporan Pengaduan Masyarakat</h4>
            <p class="card-description"> Isi formulir untuk mengajukan pengaduan pada infrastruktur jalan </p>
            <form action="{{ route('laporans.update', $laporans->id) }}" method="POST" enctype="multipart/form-data"
                class="forms-sample">
                @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="nama_pelapor">Nama Pelapor</label>
                    <input name="nama_pelapor" type="text" class="form-control" id="nama_pelapor"
                       disabled value="{{ $laporans->nama_pelapor}}">
                </div>
                <div class="form-group">
                    <label for="nama_ruas">Nama Ruas</label>
                    <input name="nama_ruas" type="text" class="form-control" id="nama_ruas"
                        disabled value="{{ $laporans->nama_ruas}}">
                </div>
                <div class="form-group">
                    <label for="panjang_kerusakan">Panjang Kerusakan</label>
                    <input name="panjang_kerusakan" type="text" class="form-control" id="panjang_kerusakan"
                        disabled value="{{ $laporans->panjang_kerusakan}}">
                </div>
                <div class="form-group">
                    <label for="lebar_kerusakan">Lebar Kerusakan</label>
                    <input name="lebar_kerusakan" type="text" class="form-control" id="lebar_kerusakan"
                        disabled value="{{ $laporans->lebar_kerusakan}}">
                </div>
                <div class="form-group">
                    <label for="kondisi_jalan">Kondisi Jalan</label>
                    <input name="kondisi_jalan" type="text" class="form-control" id="kondisi_jalan"
                        disabled value="{{ $laporans->kondisi_jalan}}">
                </div>
                <div class="form-group">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto Kerusakan</label>
                    <div class="col-sm-12 col-md-7">
                        <img name="image" type="img" class="form-control" id="image" disabled src="{{ asset('images/' . $laporans->image) }}"
                            alt="Kerusakan" width="100">
                    </div>
                </div>
                <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-select" id="status" value="{{ $laporans->status}}">
                        <option>Sedang Dalam Pengerjaan</option>
                        <option>Ruas Jalan Sudah diPerbaiki</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Update Laporan!</button>
            </form>
        </div>
    </div>
</div>
@endsection
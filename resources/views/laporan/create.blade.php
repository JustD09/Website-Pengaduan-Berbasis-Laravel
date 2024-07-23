@extends('components.app')

@section('content')
<div class="col-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Laporan Pengaduan Masyarakat</h4>
            <p class="card-description"> Isi formulir untuk mengajukan pengaduan pada infrastruktur jalan </p>
            <form action="{{ route('laporan.store') }}" method="POST" enctype="multipart/form-data"
                class="forms-sample">
                @csrf
                <div class="form-group">
                    <label for="nama_pelapor">Nama Pelapor</label>
                    <input name="nama_pelapor" type="text" class="form-control" id="nama_pelapor"
                        placeholder="Masukan Nama Anda" required>
                </div>
                <div class="form-group">
                    <label for="nama_ruas">Nama Ruas</label>
                    <input name="nama_ruas" type="text" class="form-control" id="nama_ruas"
                        placeholder="Masukan Nama Ruas Jalan !" required>
                </div>
                <div class="form-group">
                    <label for="tanggal_laporan">Tanggal Laporan</label>
                    <input name="tanggal_laporan" type="text" class="form-control datepicker" id="tanggal_laporan"
                        placeholder="Masukan Tanggal Laporan Jalan !" required>
                </div>
                <div class="form-group">
                    <label for="panjang_kerusakan">Panjang Kerusakan</label>
                    <input name="panjang_kerusakan" type="text" class="form-control" id="panjang_kerusakan"
                        placeholder="Berapa Panjang Kerusakan Jalan Tersebut ?" required>
                </div>
                <div class="form-group">
                    <label for="lebar_kerusakan">Lebar Kerusakan</label>
                    <input name="lebar_kerusakan" type="text" class="form-control" id="lebar_kerusakan"
                        placeholder="Berapa Lebar Kerusakan Jalan Tersebut ?" required>
                </div>
                <div class="form-group">
                    <label for="kondisi_jalan">Kondisi Jalan</label>
                    <input name="kondisi_jalan" type="text" class="form-control" id="kondisi_jalan"
                        placeholder="Bagaimana Kondisi Jalan Tersebut ?" required>
                </div>
                <div class="form-group">
                    <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Upload Foto Kerusakan</label>
                    <div class="col-sm-12 col-md-7">
                        <input type="file" name="image" id="image" class="form-control" required />
                    </div>
                </div>
                <button type="submit" class="btn btn-gradient-primary me-2">Kirim Laporan!</button>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Laporan Masyarakat</h4>
                <div class="table-responsive">
                    <table class="table">
                        @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                        @if (session('error'))
                        <div class="alert alert-warning">
                            {{ session('error') }}
                        </div>
                        @endif
                        @if (session('danger'))
                        <div class="alert alert-danger">
                            {{ session('danger') }}
                        </div>
                        @endif
                        <thead>
                            <tr>
                                <th> No. </th>
                                <th> Nama Pelapor </th>
                                <th> Nama Ruas </th>
                                <th> Tanggal Laporan </th>
                                <th> Panjang Kerusakan </th>
                                <th> Lebar Kerusakan </th>
                                <th> Kondisi Jalan </th>
                                <th> Foto Kerusakan </th>
                                <th> Status </th>
                                <th> ACTION </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($laporans->count() > 0)
                            @foreach ($laporans as $rs)
                            <tr>
                                <td class="align-middle justify-center">{{ $loop->iteration }}</td>
                                <td class="align-middle justify-center">{{ $rs->nama_pelapor }}</td>
                                <td class="align-middle justify-center">{{ $rs->nama_ruas }}</td>
                                <td class="align-middle justify-center">{{ $rs->tanggal_laporan }}</td>
                                <td class="align-middle justify-center">{{ $rs->panjang_kerusakan }}</td>
                                <td class="align-middle justify-center">{{ $rs->lebar_kerusakan }}</td>
                                <td class="align-middle justify-center">{{ $rs->kondisi_jalan }}</td>
                                <td class="align-middle justify-center"> <img src="{{ asset('images/' . $rs->image) }}"
                                        alt="Kerusakan" width="100"> </td>
                                <td class="align-middle justify-center">
                                    @if ($rs->status == 'Dalam Pemeriksaan Petugas')
                                    <span class="badge badge-gradient-danger">{{ $rs->status }}</span>
                                    @elseif ($rs->status == 'Sedang Dalam Pengerjaan')
                                    <span class="badge badge-gradient-primary">{{ $rs->status }}</span>
                                    @elseif ($rs->status == 'Ruas Jalan Sudah diPerbaiki')
                                    <span class="badge badge-gradient-success">{{ $rs->status }}</span>
                                    @endif
                                </td>
                                <td class="align-middle justify-center">
                                    <a href="{{ route('laporans.show', $rs->id) }}" class="btn-outline-grey"><i
                                            class="mdi mdi-eye-outline"></i></a>
                                    <a href="{{ route('laporans.edit', $rs->id) }}" class="btn-outline-grey"><i
                                            class="mdi mdi-file-edit"></i></a>
                                    <form action="{{ route('laporans.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Hapus ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-outline-grey"><i class="mdi mdi-delete"></i></button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
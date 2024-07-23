@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Data Infrastruktur</h4>
                <a href="{{ route('infrastruktur.create') }}" class="btn btn-primary text">Buat Data !</a>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th> No. </th>
                                <th> Nama Ruas </th>
                                <th> Panjang (Km) </th>
                                <th> Lebar (m) </th>
                                <th> Kondisi Jalan </th>
                                <th> Status Jalan </th>
                                <th> Kelas Jalan </th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($infrastruktur->count() > 0)
                            @foreach ($infrastruktur as $rs)
                            <tr>
                                <td class="align-middle justify-center">{{ $loop->iteration }}</td>
                                <td class="align-middle justify-center">{{ $rs->nama_ruas }}</td>
                                <td class="align-middle justify-center">{{ $rs->panjang_km}}</td>
                                <td class="align-middle justify-center">{{ $rs->lebar_m}}</td>
                                <td class="align-middle justify-center">{{ $rs->kondisi_jalan }}</td>
                                <td class="align-middle justify-center">{{ $rs->status_jalan}}</td>
                                <td class="align-middle justify-center">{{ $rs->kelas_jalan}}</td>
                                <td class="align-middle justify-center">
                                    <a href="{{ route('infrastruktur.show', $rs->id) }}" class="btn-outline-grey"><i
                                            class="mdi mdi-eye-outline"></i></a>
                                    <a href="{{ route('infrastruktur.edit', $rs->id) }}" class="btn-outline-grey"><i
                                            class="mdi mdi-file-edit"></i></a>
                                    <form action="{{ route('infrastruktur.destroy', $rs->id) }}" method="POST" onsubmit="return confirm('Hapus ?')">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn-outline-grey"><i class="mdi mdi-delete"></i></button>
                                    </form>
                                </td
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
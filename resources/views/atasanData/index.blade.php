@extends('partials.app')

@section('content')
<div class="row">
    <div class="col-lg-12 grid-margin">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Laporan Masyarakat</h4>
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
                            @if ($atasanData->count() > 0)
                            @foreach ($atasanData as $rs)
                            <tr>
                                <td class="align-middle justify-center">{{ $loop->iteration }}</td>
                                <td class="align-middle justify-center">{{ $rs->nama_ruas }}</td>
                                <td class="align-middle justify-center">{{ $rs->panjang_km}}</td>
                                <td class="align-middle justify-center">{{ $rs->lebar_m}}</td>
                                <td class="align-middle justify-center">{{ $rs->kondisi_jalan }}</td>
                                <td class="align-middle justify-center">{{ $rs->status_jalan}}</td>
                                <td class="align-middle justify-center">{{ $rs->kelas_jalan}}</td>
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
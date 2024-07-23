@extends('layouts.app')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Selamat Datang Di Web Pengaduan Infrastruktur Jalan
        </h3>
        <nav aria-label="breadcrumb">
            <ul class="breadcrumb">
                <li class="breadcrumb-item active" aria-current="page">
                </li>
            </ul>
        </nav>
    </div>
    <div class="row">
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                    <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Laporan Masuk <i class="mdi mdi-chart-line mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{ $reports }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                    <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Laporan Penanganan <i
                            class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{ $reports2 }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                    <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total User <i class="mdi mdi-diamond mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{ $totalUser }}</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Laporan Masyarakat</h4>
                    <div class="table-responsive">
                        <table class="table">
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
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($allLaporan as $rs)
                                    <tr>
                                        <td class="align-middle justify-center">{{ $loop->iteration }}</td>
                                        <td class="align-middle justify-center">{{ $rs->nama_pelapor }}</td>
                                        <td class="align-middle justify-center">{{ $rs->nama_ruas }}</td>
                                        <td class="align-middle justify-center">{{ $rs->tanggal_laporan }}</td>
                                        <td class="align-middle justify-center">{{ $rs->panjang_kerusakan }}</td>
                                        <td class="align-middle justify-center">{{ $rs->lebar_kerusakan }}</td>
                                        <td class="align-middle justify-center">{{ $rs->kondisi_jalan }}</td>
                                        <td class="align-middle justify-center"> <img
                                                src="{{ asset('images/' . $rs->image) }}" alt="Kerusakan" width="100">
                                        </td>
                                        <td class="align-middle justify-center">
                                            @if ($rs->status == 'Dalam Pemeriksaan Petugas')
                                                <span class="badge badge-gradient-danger">{{ $rs->status }}</span>
                                            @elseif ($rs->status == 'Sedang Dalam Pengerjaan')
                                                <span class="badge badge-gradient-primary">{{ $rs->status }}</span>
                                            @elseif ($rs->status == 'Ruas Jalan Sudah diPerbaiki')
                                                <span class="badge badge-gradient-success">{{ $rs->status }}</span>
                                            @endif
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- Visi Misi Section -->
        <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body text-center">
                        <h3 class="card-title">VISI & MISI</h3>
                        <p><strong>VISI:</strong></p>
                        <p>Sumsel maju untuk semua.</p>
                        <p><strong>MISI:</strong></p>
                        <ul>
                            <li>1. Membangun Sumsel berbasis ekonomi kerakyatan, didukung sektor pertanian, industri, dan
                                UMKM yang tangguh untuk mengatasi pengangguran dan kemiskinan baik di perkotaan maupun di
                                perdesaan. </li>
                            <li>2. Meningkatkan kualitas SDM, baik laki-laki maupun perempuan, yang sehat, berpendidikan,
                                profesional, dan menjunjung tinggi nilai keimanan, ketaqwaan, kejujuran, dan integritas.
                            </li>
                            <li>3. Mewujudkan tata kelola pemerintahan yang bebas KKN dengan mengedepankan transparanasi dan
                                akuntabilitas yang didukung aparatur pemerintahan yang jujur, berintegritas, profesional,
                                dan responsif. </li>
                            <li>4. Membangun dan meningkatkan kualitas dan kuantitas infrastruktur dasar guna percepatan
                                pembangunan wilayah pedalaman dan pembatasan, memperlancar arus barang dan mobilitas
                                penduduk, serta mewujudkan daya saing daerah dengan mempertimbangkan pemerataan dan
                                keseimbangan daerah. </li>
                            <li>5. Meningkatkan kehidupan beragama, seni, dan budaya untuk membangun karakter kehidupan
                                sosial yang agamais dan berbudaya, ditopang fisik yang sehat melalui kegiatan olahraga, dan
                                pengembangan pariwisata berorientasi pariwisata religius. </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

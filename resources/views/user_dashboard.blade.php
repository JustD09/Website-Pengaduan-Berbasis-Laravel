@extends('components.app')

@section('content')
    <div class="page-header">
        <h3 class="page-title">
            <span class="page-title-icon bg-gradient-primary text-white me-2">
                <i class="mdi mdi-home"></i>
            </span> Selamat Datang di Dashboard Laporan Infrastruktur Jalan
        </h3>
    </div>
    <div class="row">
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-danger card-img-holder text-white">
                <div class="card-body">
                    <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Total User <i
                            class="mdi mdi-account-cog-outline mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{ $totalUser }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-info card-img-holder text-white">
                <div class="card-body">
                    <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Laporan Masuk <i
                            class="mdi mdi-bookmark-outline mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{ $reports }}</h2>
                </div>
            </div>
        </div>
        <div class="col-md-4 stretch-card grid-margin">
            <div class="card bg-gradient-success card-img-holder text-white">
                <div class="card-body">
                    <img src="../../assets/images/dashboard/circle.svg" class="card-img-absolute" alt="circle-image" />
                    <h4 class="font-weight-normal mb-3">Data Seluruh Infrastruktur Jalan <i
                            class="mdi mdi-diamond mdi-24px float-end"></i>
                    </h4>
                    <h2 class="mb-5">{{ $allLaporans }}</h2>
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

@section('seo')
<title>BloodConnect - Connected For Life</title>
<meta name="description" content="Satu aplikasi hubungkan orang yang membutuhkan" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="BloodConnect - Connected For Life" />
<meta property="og:url" content="{{ url()->full() }}" />
<meta property="og:site_name" content="BloodConnect - Connected For Life" />
<meta property="og:image" content="http://dashboard.bloodconnect.social/assets/media/banner.png" />
<link rel="shortcut icon" href="{{ asset('assets/media/logo.png') }}" />
@endsection
   
   <div class="d-flex flex-column container w-100 min-h-350px min-h-lg-500px px-9">
        <div class="mb-5 mb-lg-10 py-10 py-lg-20">
            <h1 class="text-white lh-base fw-bold fs-5x fs-lg-5x mb-0">BloodConnect
            <br />
        </h1>
        <p class="fw-semibold text-light fs-1x fs-lg-2x">
            <span id="kt_landing_hero_text text-muted">"Satu aplikasi hubungkan orang yang membutuhkan"<br>
                -BloodConnect
            </span>
        </p>
            <a href="../../demo27/dist/index.html">
                <img alt="Logo" src="{{ asset('assets/media/playstore.png') }}" class="logo-default h-45px h-lg-50px mt-10" />
            </a>
        </div>
    </div>
</div>
</div>

<div class="mb-n10 mb-lg-n20 z-index-2 mt-20 mt-lg-20">
<div class="container mt-lg-20">
    <div class="text-center mb-17">
        <h3 class="fs-2hx text-dark mb-5" id="how-it-works" data-kt-scroll-offset="{default: 100, lg: 150}">Fitur Kami</h3>
        <div class="fs-5 text-muted fw-bold">Nikmati berbagai macam fitur yang kami berikan</div>
    </div>
    <div class="row w-100 gy-10 mb-md-20 d-flex align-items-center justify-content-center">
        <div class="col-md-5 col-12">
            <div class="row">
                <div class="col-md-12 px-5 card border-0">
                    <div class="mb-10 mb-md-0 border-1 border-dashed card-rounded p-5">
                        <div class="mb-5 d-flex align-content-center">
                            <span class="badge badge-circle badge-light-danger fw-bold p-5 me-3 fs-3">1</span>
                            <div class="fs-5 fs-lg-3 fw-bold text-dark">Temukan Kebutuhan Darah Disekitarmu</div>
                        </div>
                        <div class="fw-semibold fs-6 fs-lg-4 text-muted">Donorkan darahmu untuk orang orang yang membutuhkan di sekitarmu </div>
                    </div>
                </div>
                <div class="col-md-12 px-5 mt-lg-10 card border-0">
                    <div class="mb-10 mb-md-0 border-1 border-dashed card-rounded p-5">
                        <div class="mb-5 d-flex align-content-center">
                            <span class="badge badge-circle badge-light-danger fw-bold p-5 me-3 fs-3">2</span>
                            <div class="fs-5 fs-lg-3 fw-bold text-dark">Dapatkan Informasi Stok & Jadwal MU</div>
                        </div>
                        <div class="fw-semibold fs-6 fs-lg-4 text-muted">Lihat Informasi stok darah harian dan jadwal mobil unit secara realtime</div>
                    </div>
                </div>
                <div class="col-md-12 px-5 mt-lg-10 pb-ld-20 pb-5 card border-0">
                    <div class="mb-md-0 border-1 border-dashed card-rounded p-5">
                        <div class="mb-5 d-flex align-content-center">
                            <span class="badge badge-circle badge-light-danger fw-bold p-5 me-3 fs-3">3</span>
                            <div class="fs-5 fs-lg-3 fw-bold text-dark">Baca Berita & Artikel Menarik</div>
                        </div>
                        <div class="fw-semibold fs-6 fs-lg-4 text-muted">Dapatkan artikel dan Informasi mengenai kesehatan dan donor darah</div>
                    </div>
                </div>
            </div>
        </div>    
        <div class="col-md-6 text-end">
                <img src="{{ asset('assets/media/frame1.png') }}" class=" mh-lg-750px  mw-100" alt="" />
        </div>
    </div>
</div>

</div>
<div class="mt-sm-n20">
<div class="landing-curve landing-dark-color">
    <svg viewBox="15 -1 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M1 48C4.93573 47.6644 8.85984 47.3311 12.7725 47H1489.16C1493.1 47.3311 1497.04 47.6644 1501 48V47H1489.16C914.668 -1.34764 587.282 -1.61174 12.7725 47H1V48Z" fill="#FF2156"></path>
    </svg>
</div>
<div class="pb-15 pt-18 landing-dark-bg">
    <div class="container">
        <div class="d-flex flex-center">
            <div class="d-flex flex-wrap flex-center justify-content-lg-between mb-15 mx-auto w-xl-900px">
                <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
                    <i class="ki-outline ki-user fs-2tx text-danger mb-3"></i>
                    <div class="mb-0">
                        <div class="fs-lg-2hx fs-2x fw-bold text-danger d-flex flex-center justify-content-center text-center">
                            <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="{{$data['user']}}" data-kt-countup-suffix="+">0</div>
                        </div>
                        <span class="text-danger fw-semibold fs-5 lh-0">Pengguna Aktif</span>
                    </div>
                </div>
                <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
                    <i class="ki-outline ki-chart-pie-4 fs-2tx text-danger mb-3"></i>
                    <div class="mb-0">
                        <div class="fs-lg-2hx fs-2x fw-bold text-danger d-flex flex-center justify-content-center text-center">
                            <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="{{$data['kantong']}}" data-kt-countup-suffix="+">0</div>
                        </div>
                        <span class="text-danger fw-semibold fs-5 lh-0">Permintaan Kantong</span>
                    </div>
                </div>
                <div class="d-flex flex-column flex-center h-200px w-200px h-lg-250px w-lg-250px m-3 bgi-no-repeat bgi-position-center bgi-size-contain" style="background-image: url('assets/media/svg/misc/octagon.svg')">
                    <i class="ki-outline ki-pulse fs-2tx text-danger mb-3"></i>
                    <div class="mb-0">
                        <div class="fs-lg-2hx fs-2x fw-bold text-danger d-flex flex-center justify-content-center text-center">
                            <div class="min-w-70px" data-kt-countup="true" data-kt-countup-value="{{$data['req']}}" data-kt-countup-suffix="+">0</div>
                        </div>
                        <span class="text-danger fw-semibold fs-5 lh-0">Pasien Terbantu</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="fs-2 fw-semibold text-light text-center mb-3">
            "Siapa saja yang menolong saudaranya, <br> maka Allah akan menolongnya sebagaimana ia menolong saudaranya"
        </div>
        <div class="fs-2 fw-semibold text-muted text-center">
            <span class="fs-4 fw-bold text-light">(HR. Muslim)</span>
        </div>
    </div>
</div>
<div class="landing-curve landing-dark-color">
    <svg viewBox="15 12 1470 48" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M0 11C3.93573 11.3356 7.85984 11.6689 11.7725 12H1488.16C1492.1 11.6689 1496.04 11.3356 1500 11V12H1488.16C913.668 60.3476 586.282 60.6117 11.7725 12H0V11Z" fill="#FF2156"></path>
    </svg>
</div>
</div>
<div class="py-10 py-lg-20">
    <div class="container">
        <div class="text-center mb-12">
            <h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Team Kami</h3>
            <div class="fs-5 text-muted fw-bold">Terima kasih kepada orang-orang yang luar biasa ini</div>
        </div>
        <div class="tns tns-default" style="direction: ltr">
            <div data-tns="true" data-tns-loop="true" data-tns-swipe-angle="false" data-tns-speed="2000" data-tns-autoplay="true" data-tns-autoplay-timeout="18000" data-tns-controls="true" data-tns-nav="false" data-tns-items="1" data-tns-center="false" data-tns-dots="false" data-tns-prev-button="#kt_team_slider_prev" data-tns-next-button="#kt_team_slider_next" data-tns-responsive="{1200: {items: 3}, 992: {items: 2}}">
                <div class="text-center">
                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ asset('assets/media/fajar.jpg') }}')"></div>
                    <div class="mb-0">
                        <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Fajar Rivaldi Chan</a>
                        <div class="text-muted fs-6 fw-semibold mt-1">Backend Developer (Leader)</div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ asset('assets/media/brucel.jpg') }}')"></div>
                    <div class="mb-0">
                        <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Brucel Duta Samudera</a>
                        <div class="text-muted fs-6 fw-semibold mt-1">UI/UX Designer</div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('{{ asset('assets/media/sukma.jpg') }}')"></div>
                    <div class="mb-0">
                        <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Sukma Rizky</a>
                        <div class="text-muted fs-6 fw-semibold mt-1">Mobile Developer</div>
                    </div>
                </div>
                <div class="text-center">
                    <div class="octagon mx-auto mb-5 d-flex w-200px h-200px bgi-no-repeat bgi-size-contain bgi-position-center" style="background-image:url('assets/media/avatars/300-1.jpg')"></div>
                    <div class="mb-0">
                        <a href="#" class="text-dark fw-bold text-hover-primary fs-3">Said Fadhlan Ashari</a>
                        <div class="text-muted fs-6 fw-semibold mt-1">Pembimbing</div>
                    </div>
                </div>
            </div>
            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_prev">
                <i class="ki-outline ki-left fs-2x"></i>
            </button>
            <button class="btn btn-icon btn-active-color-primary" id="kt_team_slider_next">
                <i class="ki-outline ki-right fs-2x"></i>
            </button>
        </div>
    </div>
</div>

<div class="py-10 py-lg-20">
    <div class="container">
        <div class="text-center mb-12">
            <h3 class="fs-2hx text-dark mb-5" id="team" data-kt-scroll-offset="{default: 100, lg: 150}">Didukung Oleh</h3>
            <div class="fs-5 text-muted fw-bold">Terima kasih kepada pihak pihak yang telah mendukung dalam pengembangan aplikasi ini</div>
        </div>
        <div class="text-center">
            <img alt="Logo" src="{{ asset('assets/media/support.png') }}" class="img-fluid h-md-100px" />
        </div>
    </div>
</div>

<div class="mb-n20 position-relative bg-lightz-index-2 pt-10">
    <div class="container pt-10">
        <div class="mb-5 pt-10">
            <h3 class="fs-2hx  mb-5" id="clients" data-kt-scroll-offset="{default: 125, lg: 150}">Artikel</h3>
            <div class="fs-5 text-muted fw-bold">Baca artikel menarik disini</div>
        </div>
        <div class="row g-lg-10 mb-10 mb-lg-20">
            @foreach($data['news'] as $row)
            <div class="col-lg-4 py-0">
                <div class="card shadow d-flex flex-column justify-content-between h-lg-100 px-lg-0 mb-15 mb-lg-0">
                    <div class="card-body">
                        <div class="mb-7">
                            <div class="rating mb-6">
                                <div class="mx-auto mb-1 rounded d-flex w-100 h-200px bgi-no-repeat bgi-size-cover bgi-position-center" style="background-image:url('{{ $row->image }}')"></div>
                            </div>
                            <a href="{{ route('artikel', $row->slug) }}" class="fs-2 fw-bold text-dark text-hover-danger  pb-10">{{ $row->title }}</a>
                            <div class="text-gray-600 fw-semibold fs-4 pt-5"><?php echo substr($row->content, 0, 150) ?>...</div>
                        </div>
                        <div class="d-flex align-items-center">
                            <div class="symbol symbol-circle symbol-50px me-5">
                                <img src="{{ $row->photo }}" class="" alt="" />
                            </div>
                            <div class="flex-grow-1">
                                <span class="text-dark d-block fw-bold fs-6">{{ $row->name }}</span>
                                <span class="text-muted fw-bold fs-6">{{ date('d F Y', strtotime($row->news_created)) }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>   

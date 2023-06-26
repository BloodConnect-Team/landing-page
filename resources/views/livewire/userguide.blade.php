@section('seo')
<title>BloodConnect - Panduan Pengguna</title>
<meta name="description" content="Satu aplikasi hubungkan orang yang membutuhkan" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="Panduan Pengguna" />
<meta property="og:url" content="{{ url()->full() }}" />
<meta property="og:site_name" content="Panduan Pengguna" />
<meta property="og:image" content="http://dashboard.bloodconnect.social/assets/media/banner.png" />
<link rel="shortcut icon" href="{{ asset('assets/media/logo.png') }}" />
@endsection

<div class="d-flex flex-column container w-100 min-h-50px min-h-lg-50px px-9">
  <div class="mb-5 mb-lg-10">
      <h1 class="text-white lh-base fw-bold fs-5x fs-lg-3x mb-0">Panduan Pengguna
      <br />
      </h1>
      <p class="fw-semibold text-light fs-1x fs-lg-1x">
          <span id="kt_landing_hero_text text-muted">
            Home <span class="fw-bold px-2">/</span> Panduan Pengguna
          </span>
      </p>
  </div>
</div>
</div>
</div>


<div class="mb-n10 mb-lg-n20 z-index-2mb-lg-20">
  <div class="container mt-lg-10">
    <div class="mx-lg-20">     
      <div class="card-body p-lg-20 pb-lg-0">
          <div class="">
              <div class="flex-lg-row-fluid me-xl-15">
                <div class="mb-17">
                    
                        <div class="mb-8 mt-10 mt-lg-0 text-gray-600"> 
                          <?php echo $data->user_guide?>
                        </div>
                </div>
              </div>
          </div>
      </div>
    </div>
  </div>
</div>


</div>
 

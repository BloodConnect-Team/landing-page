@section('seo')
<title>BloodConnect - {{ $data['news']->title }}</title>
<meta name="description" content="Baca artikel kesehatan dan donor darah disini" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta property="og:locale" content="en_US" />
<meta property="og:type" content="article" />
<meta property="og:title" content="{{ $data['news']->title }}" />
<meta property="og:url" content="{{ url()->full() }}" />
<meta property="og:site_name" content="{{ $data['news']->title }}" />
<meta property="og:image" content="{{ $data['news']->photo}}" />
<link rel="shortcut icon" href="{{ asset('assets/media/logo.png') }}" />
@endsection

    <div class="d-flex flex-column container w-100 min-h-50px min-h-lg-50px px-9">
      <div class="mb-5 mb-lg-10">
          <h1 class="text-white lh-base fw-bold fs-5x fs-lg-3x mb-0">Artikel
          <br />
          </h1>
          <p class="fw-semibold text-light fs-1x fs-lg-1x">
              <span id="kt_landing_hero_text text-muted">
                Artikel <span class="fw-bold px-2">/</span> {{ $data['news']->slug}}
              </span>
          </p>
      </div>
    </div>
</div>
</div>
</div>

<div class="mb-n10 mb-lg-n20 mt-20 mt-lg-5 z-index-2 mb-lg-20">
  <div class="container mt-lg-10">
    <div class="mx-lg-20">     
      <div class="card-body p-lg-20 pb-lg-0">
          <div class="">
              <div class="flex-lg-row-fluid me-xl-15">
                <div class="mb-17">
                    <div class="mb-8">  
                        <div class="d-flex flex-wrap mb-6">
                            <div class="me-9 my-1 d-flex align-items-center">
                                <i class="ki-outline ki-element-11 text-primary fs-2 me-1"></i>
                                <span class="fw-bold text-gray-400">{{ date('d F Y', strtotime($data['news']->news_created)) }}</span>
                            </div>
                        </div>
                        <a href="#" class="text-dark text-hover-primary fs-1 fw-bold">
                            {{ $data['news']->title}}
                        </a>
                        <div class="overlay mt-8">    
                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-lg-550px min-h-200px" style="background-image:url('{{ $data['news']->image}}')">                       
                            </div>
                        </div>  
                    </div>

                        <div class="mb-8 text-gray-600"> 
                          <?php echo $data['news']->content?>
                        </div>
                    </div>

                    <div class="d-flex align-items-center border-1 border-dashed card-rounded p-5 p-lg-5 mb-14">
                        <div class="text-center flex-shrink-0 me-7 me-lg-13">
                            <div class="symbol symbol-50px symbol-circle mb-2">
                                <img src="{{ $data['news']->photo}}" class="" alt=""> 
                            </div>
                        </div>
                        <div class="mb-0 fs-6"> 
                          <a href="/metronic8/demo27/../demo27/pages/user-profile/overview.html" class="text-gray-700 fw-bold text-hover-primary">{{ $data['news']->name}}</a>
                          <span class="text-gray-400 fs-7 fw-semibold d-block mt-1">Author</span>             
                        </div>
                    </div>
                </div>

                <div class="mb-17">
                  <div class="d-flex flex-stack mb-5">
                      <h3 class="text-dark">Artikel Lainnya</h3>
                  </div>  

                  <div class="separator separator-dashed mb-9"></div>

                  <div class="row g-10"> 

                    @foreach($data['newslist'] as $row)
                    <div class="col-lg-4 py-0">
                      <div class="card shadow d-flex flex-column justify-content-between h-lg-100 px-lg-0 mb-15 mb-lg-0">
                          <div class="card-body">
                              <div class="mb-7">
                                  <div class="rating mb-6">
                                      <div class="mx-auto mb-1 rounded d-flex w-100 h-150px bgi-no-repeat bgi-size-cover bgi-position-center" style="background-image:url('{{ $row->image }}')"></div>
                                  </div>
                                  <a href="{{ route('artikel', $row->slug) }}" class="fs-4 fw-bold text-dark text-hover-danger  pb-10">{{ $row->title }}</a>
                                  <div class="text-gray-600 fw-semibold fs-6 pt-5"><?php echo substr($row->content, 0, 100) ?>...</div>
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
          </div>
      </div>
    </div>
  </div>
</div>


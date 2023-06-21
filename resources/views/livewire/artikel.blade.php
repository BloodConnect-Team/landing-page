


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

<div class="mb-n10 mb-lg-n20 z-index-2mb-lg-20">
  <div class="container mt-lg-10">
    <div class="mx-lg-20">     
      <div class="card-body p-lg-20 pb-lg-0">
          <div class="">
              <div class="flex-lg-row-fluid me-xl-15">
                <div class="mb-17">
                    <div class="mb-8">  
                        <div class="d-flex flex-wrap mb-6">
                            <div class="me-9 my-1">
                                <i class="ki-outline ki-element-11 text-primary fs-2 me-1"></i>
                                <span class="fw-bold text-gray-400">06 April 2021</span>
                            </div>
                        </div>
                        <a href="#" class="text-dark text-hover-primary fs-1 fw-bold">
                            {{ $data['news']->title}}
                        </a>
                        <div class="overlay mt-8">    
                            <div class="bgi-no-repeat bgi-position-center bgi-size-cover card-rounded min-h-550px" style="background-image:url('{{ $data['news']->image}}')">                       
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
                      <div class="col-md-4">           
                        <div class="card-xl-stretch me-md-6">    
                            <a class="d-block bgi-no-repeat bgi-size-cover bgi-position-center card-rounded position-relative min-h-175px mb-5" style="background-image:url('/metronic8/demo27/assets/media/stock/600x400/img-73.jpg')" data-fslightbox="lightbox-video-tutorials" href="https://www.youtube.com/embed/btornGtLwIo">   
                                <img src="{{ $row->image }}" class="position-absolute top-50 start-50 w-100 h-100 translate-middle" alt="">
                            </a> 
                            <div class="m-0">    
                                <a href="{{ route('artikel', $row->slug) }}" class="fs-4 text-dark fw-bold text-hover-primary text-dark lh-base">
                                  {{ $row->title }}
                                </a>       
                                <div class="fw-semibold fs-5 text-gray-600 text-dark my-4">    
                                  <?php echo substr($row->content, 0, 100) ?>...
                                </div>
                                <div class="fs-6 fw-bold">
                                    <span class="text-gray-700 text-hover-primary">{{ $row->name }}</span><br>
                                    <span class="text-muted">{{ date('d F Y', strtotime($row->news_created)) }}</span>     
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BloodConnect - URGENT!!</title>
    <meta name="description" content="Dibutuhkan segera donor pengganti dengan golongan darah {{ $data->requests_goldar }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Seorang Pasien membutuhkan bantuanmu!!" />
    <meta property="og:url" content="{{ url()->full() }}" />
    <meta property="og:site_name" content="Seorang Pasien membutuhkan bantuanmu!!" />
    <meta property="og:image" content="
    @if ( $data->requests_goldar == 'A+')
      {{ asset('assets/media/blood/a_pos.png') }}
    @elseif($data->requests_goldar == 'B+')
      {{ asset('assets/media/blood/b_pos.png') }}
    @elseif($data->requests_goldar == 'AB+')
      {{ asset('assets/media/blood/ab_pos.png') }}
    @elseif($data->requests_goldar == 'O+')
      {{ asset('assets/media/blood/o_pos.png') }}
    @elseif($data->requests_goldar == 'A-')
      {{ asset('assets/media/blood/b_neg.png') }}
    @elseif($data->requests_goldar == 'B-')
      {{ asset('assets/media/blood/b_neg.png') }}
    @elseif($data->requests_goldar == 'AB-')
      {{ asset('assets/media/blood/ab_neg.png') }}
    @elseif($data->requests_goldar == 'O-')
      {{ asset('assets/media/blood/o_neg.png') }}
    @endif
    " />
    <link rel="shortcut icon" href="{{ asset('assets/media/logo.png') }}" />
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <livewire:styles/>
    <livewire:scripts/>
    <style>
        html,body {
              padding:0;
              margin:0;
              font-family: Inter, Helvetica, "sans-serif";                                       
          }            
  
          a:hover {
              color: #009ef7;
          }
    </style>
</head>

<body  id="kt_body"  class="app-blank" >
  <div class="d-flex flex-column flex-root" id="kt_app_root">
      <div id="#kt_app_body_content" style="background-color:#D5D9E2; font-family:Arial,Helvetica,sans-serif; line-height: 1.5; min-height: 100%; font-weight: normal; font-size: 15px; color: #2F3044; margin:0; padding:0; width:100%;">
          <div style="background-color:#ffffff; padding: 45px 0 34px 0; border-radius: 24px; margin:40px auto; max-width: 600px;">
              <table align="center" border="0" cellpadding="0" cellspacing="0" width="100%" height="auto" style="border-collapse:collapse">
                  <tbody>                      
                      <tr>
                          <td align="center" valign="center" style="text-align:center; padding-bottom: 10px">
                            <div style="text-align:center; margin:0 60px 34px 60px">
                                <div style="margin-bottom: 10px">
                                    <a href="https://keenthemes.com" rel="noopener" target="_blank">
                                        <img alt="Logo" src="{{ asset('assets/media/icon-dark.svg') }}" style="height: 45px"/>
                                    </a>
                                </div>
                                <div style="font-size: 14px; font-weight: 500; margin-bottom: 42px; font-family:Arial,Helvetica,sans-serif">
                                    <p style="margin-bottom:9px; color:#181C32; font-size: 22px; font-weight:700">Seorang Pasien <br>
                                       membutuhkan bantuanmu!</p>
                                      @if ( $data->requests_goldar == 'A+')
                                        <img alt="Logo" src="{{ asset('assets/media/blood/a_pos.png') }}" style="height: 120px"/>
                                      @elseif($data->requests_goldar == 'B+')
                                        <img alt="Logo" src="{{ asset('assets/media/blood/b_pos.png') }}" style="height: 120px"/>
                                      @elseif($data->requests_goldar == 'AB+')
                                        <img alt="Logo" src="{{ asset('assets/media/blood/ab_pos.png') }}" style="height: 120px"/>
                                      @elseif($data->requests_goldar == 'O+')
                                        <img alt="Logo" src="{{ asset('assets/media/blood/o_pos.png') }}" style="height: 120px"/>
                                      @elseif($data->requests_goldar == 'A-')
                                        <img alt="Logo" src="{{ asset('assets/media/blood/b_neg.png') }}" style="height: 120px"/>
                                      @elseif($data->requests_goldar == 'B-')
                                        <img alt="Logo" src="{{ asset('assets/media/blood/b_neg.png') }}" style="height: 120px"/>
                                      @elseif($data->requests_goldar == 'AB-')
                                        <img alt="Logo" src="{{ asset('assets/media/blood/ab_neg.png') }}" style="height: 120px"/>
                                      @elseif($data->requests_goldar == 'O-')
                                        <img alt="Logo" src="{{ asset('assets/media/blood/o_neg.png') }}" style="height: 120px"/>
                                      @endif
                                </div> 
                                <div style="margin-bottom: 15px">
                                    <div style="padding-bottom:9px">
                                      <div class="card-body pt-5">                 
                                        <div class="d-flex flex-stack">
                                          <div class="text-gray-700 fw-semibold fs-6 me-2">Pasien</div>                   
                                            <div class="d-flex align-items-senter">
                                              <span class="text-gray-400 fw-bold fs-6">{{ $data->requests_pasien }}</span> 
                                            </div>  
                                        </div>
                                        <div class="separator separator-dashed my-3"></div>
                                        <div class="d-flex flex-stack">
                                          <div class="text-gray-700 fw-semibold fs-6 me-2">Komponen</div>                   
                                            <div class="d-flex align-items-senter">
                                              <span class="text-gray-400 fw-bold fs-6">{{ $data->requests_jenis }}</span> 
                                            </div>  
                                        </div>
                                        <div class="separator separator-dashed my-3"></div>
                                        <div class="d-flex flex-stack">
                                          <div class="text-gray-700 fw-semibold fs-6 me-2">Jumlah Kantong</div>                   
                                            <div class="d-flex align-items-senter">
                                              <span class="text-gray-400 fw-bold fs-6">{{ $data->requests_jumlah }}</span> 
                                            </div>  
                                        </div>
                                        <div class="separator separator-dashed my-3"></div>
                                        <div class="d-flex flex-stack">
                                          <div class="text-gray-700 fw-semibold fs-6 me-2">Rumah Sakit</div>                   
                                            <div class="d-flex align-items-senter">
                                              <span class="text-gray-400 fw-bold fs-6"><a href="https://www.google.com/maps/search/?api=1&query={{$data->bdrs_lat}},{{$data->bdrs_lng}}" class="text-danger">{{ $data->bdrs_nama }}</a></span> 
                                            </div>  
                                        </div>
                                        <div class="separator separator-dashed my-3"></div>
                                        <div class="d-flex flex-stack">
                                          <div class="text-gray-700 fw-semibold fs-6 me-2">Narahubung</div>                   
                                            <div class="d-flex align-items-senter">
                                              <span class="text-gray-400 fw-bold fs-6">{{ $data->requests_hp }}({{ $data->requests_nama }})</span> 
                                            </div>  
                                        </div>
                                        <div class="separator separator-dashed my-3"></div>
                                        <div class="">
                                          <div class="text-gray-700 fw-semibold fs-6 me-2 text-start">Note: </div>                   
                                            <div class="d-flex align-items-senter">
                                              <span class="text-gray-400 fw-bold fs-6">{{ $data->requests_catatan }}</span> 
                                            </div>  
                                        </div>
                                      </div>

                                    </div> 
                                </div> 

                                <?php
                                    $numeroTelefone = $data->requests_hp;
                                    if (substr($numeroTelefone, 0, 1) === "0") {
                                        $numeroTelefone = "62" . substr($numeroTelefone, 1);
                                    }
                                ?>

                                <a href="https://wa.me/{{$numeroTelefone}}" class="btn btn-light-danger w-100" target="_blank">
                                   <i class="ki ki-bold-close icon-sm"></i> Hubungi
                                </a>
                            </div>
                          </td>
                      </tr>  
                      <tr class="mb-5 pb-5">
                        <td >
                          <div class="text-center text-danger">
                            <small class="text-center">Dibagikan Oleh:</small>
                          </div>
                          <div class="d-flex justify-content-center align-items-center mb-10">
                            <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                              <span>
                                <div class="symbol-label">
                                  <img src="https://res.cloudinary.com/do8klrf5z/image/upload/v1687428543/bc/user/kpul5wq1kyuiomnqadz2.png" alt="Emma Smith" class="w-100">
                                </div>
                              </span>
                            </div>
                            <div class="d-flex flex-column">
                                <span class="text-gray-600 fw-bold text-hover-primary">fajar Rivaldi Chan</span>
                                <small class="text-muted">fajarrivaldi2015@gmail.com</small>
                            </div>
                          </div>
                        </td>
                      </tr>
                      <tr class="">
                          <td align="center" valign="center" style="font-size: 13px; text-align:center; padding: 0 10px 10px 10px; font-weight: 500; color: #A1A5B7; font-family:Arial,Helvetica,sans-serif">
                              <p class="mb-2">Pesan ini dibuat melalui aplikasi BloodConnect</p>    
                              <p>Unduh BloodConnect Untuk dapatkan informasi kebutuhan darah lainnya</p>                                                            
                          </td>
                      </tr>   
                      <tr>
                          <td align="center" valign="center" style="text-align:center; padding-bottom: 20px;">                                 
                              <a href="#">
                                <img alt="Logo" src="{{ asset('assets/media/playstore.png') }}" class=" h-40px h-lg-45px" />  
                              </a>                           
                          </td>
                      </tr>
                      <tr>
                          <td align="center" valign="center" style="font-size: 13px; padding:0 15px; text-align:center; font-weight: 500; color: #A1A5B7;font-family:Arial,Helvetica,sans-serif">                            
                              <p> &copy Copyright BloodConnect. <br>
                                Powered By 
                                  <a href="https://keenthemes.com" rel="noopener" target="_blank" class="text-danger fw-bold">GarisKode Team</a>&nbsp;
                              </p>                         
                          </td>
                      </tr>      
                  </tbody>   
              </table> 
          </div>
      </div>
  </div>

  
  <script>var hostUrl = "assets/";</script>
  <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
  <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
  <script src="{{ asset('assets/plugins/custom/fslightbox/fslightbox.bundle.js') }}"></script>
  <script src="{{ asset('assets/plugins/custom/typedjs/typedjs.bundle.js') }}"></script>
  <script src="{{ asset('assets/js/custom/landing.js') }}"></script>
  <script src="{{ asset('assets/js/custom/pages/pricing/general.js') }}"></script>
  <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
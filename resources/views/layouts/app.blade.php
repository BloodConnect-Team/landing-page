<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @yield('seo')
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <livewire:styles/>
    <livewire:scripts/>
    <style>
        .landing-dark-bg {
            background-color: #FF2156 !important;
        }
    </style>
</head>
<body id="kt_body" data-bs-spy="scroll" data-bs-target="#kt_landing_menu" class="bg-white position-relative app-blank">
    <script>
        var defaultThemeMode = "light";
        var themeMode;
        if (document.documentElement) {
                if (document.documentElement.hasAttribute("data-bs-theme-mode")) {
                        themeMode = document.documentElement.getAttribute("data-bs-theme-mode");
                } else {
                        if (localStorage.getItem("data-bs-theme") !== null) {
                                themeMode = localStorage.getItem("data-bs-theme");
                        } else {
                                themeMode = defaultThemeMode;
                        }
                }
                if (themeMode === "system") {
                        themeMode = window.matchMedia("(prefers-color-scheme: dark)").matches ? "dark" : "light";
                }
                document.documentElement.setAttribute("data-bs-theme", themeMode);
        }
    </script>
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <div class="mb-0" id="home">
            <div class="bgi-no-repeat bgi-size-cover bgi-position-x-center bgi-position-y-bottom landing-dark-bg" style="background-image: url({{ asset('assets/media/hero.svg') }})">
                <div class="landing-header" data-kt-sticky="true" data-kt-sticky-name="landing-header" data-kt-sticky-offset="{default: '200px', lg: '300px'}">
                    <div class="container">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center flex-equal">
                                <a href="{{route('index')}}">
                                    <img alt="Logo" src="{{ asset('assets/media/icon.svg') }}" class="logo-default h-40px h-lg-50px" />
                                    <img alt="Logo" src="{{ asset('assets/media/icon-dark.svg') }}" class="logo-sticky h-40px h-lg-45px" />
                                </a>
                            </div>
                            <div class="text-end ms-1">
                                <a href="../../demo27/dist/authentication/layouts/basic/sign-in.html" class="text-end ">
                                    <img alt="Logo" src="{{ asset('assets/media/playstore.png') }}" class="logo-sticky h-40px h-lg-45px" />

                                </a>
                            </div>
                        </div>
                    </div>
                </div>


                @yield('content')
             
            </div>
        </div>       

        <div class="mt-20">
            <div class="landing-dark-bg">
                <div class="landing-dark-separator"></div>
                <div class="container">
                    <div class="d-flex flex-column flex-md-row flex-stack py-7 py-lg-10">
                        <div class="d-flex align-items-center order-2 order-md-1">
                            <a href="{{ route('index') }}">
                                <img alt="Logo" src="{{ asset('assets/media/icon.svg') }}" class="h-15px h-md-20px" />
                            </a>
                            <span class="mx-5 fs-6 fw-semibold text-light pt-1" >2023 &copy; GarisKode Team</span>
                        </div>
                        <ul class="menu menu-gray-600 menu-hover-primary fw-semibold fs-6 fs-md-5 order-1 mb-5 mb-md-0">
                            <li class="menu-item">
                                <a href="{{ route('user_guide') }}" class="menu-link px-2 text-gray-300">Panduan Pengguna</a>
                            </li>
                            <li class="menu-item mx-5">
                                <a href="{{ route('privacy_policy') }}" class="menu-link px-2 text-gray-300">Kebijakan Privasi</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
            <i class="ki-outline ki-arrow-up"></i>
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
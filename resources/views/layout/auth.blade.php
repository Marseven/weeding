<html lang="en">
<!--begin::Head-->

<head>
    <base href="" />
    <title>{{ env('APP_NAME') }}</title>
    <meta charset="utf-8" />
    <meta name="description" content="Site d'invitation de Mariage" />
    <meta name="keywords" content="mariage, gabon" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="{{ env('APP_NAME') }}" />
    <meta property="og:url" content="https://mebodorichard.com" />
    <meta property="og:site_name" content="{{ env('APP_NAME') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="assets/media/logos/favicon.ico" />

    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('admin/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    @stack('styles')

    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" class="app-blank">
    <!--begin::Theme mode setup on page load-->
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
    <!--end::Theme mode setup on page load-->
    <!--begin::Root-->
    <div class="d-flex flex-column flex-root" id="kt_app_root">
        <!--begin::Authentication - Sign-in -->
        <div class="d-flex flex-column flex-lg-row flex-column-fluid">
            <!--begin::Aside-->
            <div class="d-flex flex-column flex-lg-row-auto bg-primary w-xl-600px positon-xl-relative">
                <!--begin::Wrapper-->
                <div class="d-flex flex-column position-xl-fixed top-0 bottom-0 w-xl-600px scroll-y">
                    <!--begin::Header-->
                    <div class="d-flex flex-row-fluid flex-column text-center p-5 p-lg-10 pt-lg-20">
                        <!--begin::Logo-->
                        <a href="{{ route('home') }}" class="py-2 py-lg-20">
                            <img alt="Logo" src="{{ asset('front/images/logo-white.png') }}"
                                class="h-40px h-lg-50px" />
                        </a>
                        <!--end::Logo-->
                        <!--begin::Title-->
                        <h1 class="d-none d-lg-block fw-bold text-white fs-2qx pb-5 pb-md-10">{{ env('APP_NAME') }}
                        </h1>
                        <!--end::Title-->
                        <!--begin::Description-->
                        <p class="d-none d-lg-block fw-semibold fs-2 text-white">Bienvenue à notre mariage.</p>
                        <!--end::Description-->
                    </div>
                    <!--end::Header-->
                    <!--begin::Illustration-->
                    <div class="d-none d-lg-block d-flex flex-row-auto bgi-no-repeat bgi-position-x-center bgi-size-contain bgi-position-y-bottom min-h-100px min-h-lg-350px"
                        style="background-image: url({{ asset('admin/media/illustrations/sketchy-1/17.png') }})"></div>
                    <!--end::Illustration-->
                </div>
                <!--end::Wrapper-->
            </div>
            <!--begin::Aside-->

            @yield('content')

        </div>
        <!--end::Authentication - Sign-in-->
    </div>
    <!--end::Root-->
    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('admin/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('admin/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->

    <!--begin::Custom Javascript(used for this page only)-->
    <script src="{{ asset('admin/js/custom/authentication/sign-in/general.js') }}"></script>
    <!--end::Custom Javascript-->

    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>

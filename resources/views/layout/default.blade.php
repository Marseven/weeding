<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="Mariage, Gabon" />
    <meta name="description" content="Site d'invitation de Mariage" />
    <meta name="author" content="Denise & Guy Massing" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ env('APP_NAME') }}</title>

    <!-- favicon icon -->
    <link rel="shortcut icon" href="{{ asset('front/images/favicon.png') }}" />

    <!-- bootstrap -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/bootstrap.min.css') }}" />

    <!-- animate -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/animate.css') }}" />

    <!-- flaticon -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/flaticon.css') }}" />

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/font-awesome.css') }}" />

    <!-- themify -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/themify-icons.css') }}" />

    <!-- slick -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/slick.css') }}">

    <!-- prettyphoto -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/prettyPhoto.css') }}">

    <!-- shortcodes -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/shortcodes.css') }}" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/main.css') }}" />

    <!-- main -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/megamenu.css') }}" />

    <!-- responsive -->
    <link rel="stylesheet" type="text/css" href="{{ asset('front/css/responsive.css') }}" />

    <!-- REVOLUTION LAYERS STYLES -->
    <link rel='stylesheet' id='rs-plugin-settings-css' href="{{ asset('front/revolution/css/rs6.css') }}">

    <style>
        .ttm-stickable-header.fixed-header a {
            color: #fff;
        }

        .site-branding img {
            z-index: 1;
            max-height: 60px;
            position: relative;
            margin: 10px;
        }

        /* Alertes de succès */
        .alert-success {
            background-color: #D1E7DD;
            border-color: #53A287;
            color: #155724;
        }

        /* Alertes d'erreur */
        .alert-danger {
            background-color: #F8D7DA;
            border-color: #E3342F;
            color: #721C24;
        }

        /* Alertes d'avertissement */
        .alert-warning {
            background-color: #FFF3CD;
            border-color: #FFD93C;
            color: #856404;
        }

        /* Alertes d'information */
        .alert-info {
            background-color: #D1E7F7;
            border-color: #4CA6CF;
            color: #0C5460;
        }

        .mobile-search,
        .menubar {
            display: none;
        }

        @media (max-width: 1024px) {
            .mobile-search {
                display: block;
            }

            .menubar {
                padding-top: 30px;
                display: block;
                width: 25%;
            }

            .menubar-box {
                font-size: 11px;
                height: 30px;
                width: 100%;
                line-height: 35px;
                border-radius: 3px;
                transition: all .2s ease-in-out;
                -moz-transition: all .2s ease-in-out;
                -webkit-transition: all .2s ease-in-out;
                -o-transition: all .2s ease-in-out;
                display: inline-block;
                vertical-align: middle;
                text-align: center;
                color: #fff;
                background-color: #797979;
            }
        }
    </style>

    @stack('styles')
</head>

<body>

    <!--page start-->
    <div class="page">

        <!--header start-->
        <header id="masthead" class="header ttm-header-style-01">
            <div id="site-header-menu" class="site-header-menu ttm-bgcolor-white">
                <div class="site-header-menu-inner ttm-stickable-header">
                    <div class="container">
                        <!--site-navigation-->
                        <div class="site-navigation d-flex flex-row align-items-center">
                            <!--site-branding -->
                            <div class="site-branding">
                                <a class="home-link" href="{{ route('home') }}" title="deniseguy" rel="home">
                                    <img id="logo-img" class="img-center standardlogo"
                                        src="{{ asset('front/images/logo-img.png') }}" alt="logo-img">
                                    <img id="logo-dark" class="img-center stickylogo"
                                        src="{{ asset('front/images/logo-img.png') }}" alt="logo-img">
                                </a>
                            </div><!--site-branding end-->
                            <div class="btn-show-menu-mobile menubar menubar--squeeze">
                                <span class="menubar-box btn-default">
                                    <span class=" search_btn">Voir mon Billet</span>
                                </span>
                            </div>
                            <!--menu-->
                            <nav class="main-menu menu-mobile ml-auto" id="menu">
                                <div class="header_search_content mobile-search">
                                    <form id="searchbox" method="post" action="{{ url('search') }}">
                                        @csrf
                                        <input class="search_query" type="text" id="search_query_top" name="s"
                                            placeholder="Téléphone ou Email" value="">
                                        <button type="submit" class="btn close-search"><i
                                                class="ti ti-printer"></i></button>
                                    </form>
                                </div>
                            </nav>
                            <div class="header_extra d-flex flex-row align-items-center justify-content-end ">
                                <div class="header_search">
                                    <a href="#" style="width: 100%; padding-left: 10px; padding-right: 10px;"
                                        class="btn-default search_btn">Voir mon Billet</a>
                                    <div class="header_search_content">
                                        <form id="searchbox" method="post" action="{{ url('search') }}">
                                            @csrf
                                            <input class="search_query" type="text" id="search_query_top"
                                                name="s" placeholder="Téléphone ou Email" value="">
                                            <button type="submit" class="btn close-search"><i
                                                    class="ti ti-printer"></i></button>
                                        </form>
                                    </div>
                                </div>

                            </div>
                        </div><!--site-navigation end-->
                    </div>
                </div>
            </div>
        </header>
        <!--header end-->

        @yield('content')

        <!--footer start-->
        <footer class="footer widget-footer clearfix">
            <div class="first-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <div class="first-footer-inner">
                                <div class="footer-logo">
                                    <img id="footer-logo-img" class="img-center"
                                        src="{{ asset('front/images/logo-img.png') }}" alt="">
                                </div>
                                <div class="row no-gutters footer-box">
                                    <div class="col-md-4 widget-area">
                                        <div class="featured-box text-center">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Adresse</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>Libreville, GABON</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 widget-area">
                                        <div class="featured-box text-center">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Téléphone</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>+241 77 97 73 98</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4 widget-area">
                                        <div class="featured-box text-center">
                                            <div class="featured-content">
                                                <div class="featured-title">
                                                    <h5>Email</h5>
                                                </div>
                                                <div class="featured-desc">
                                                    <p>contact@deniseguymassing.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row no-gutters">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="bottom-footer-text">
                <div class="container">
                    <div class="row copyright">
                        <div class="col-md-12">
                            <div class="text-center">
                                <span>Copyright © {{ date('Y') }}.&nbsp; Tous droits réservés par &nbsp;<a
                                        href="https://mebodorichard.com/" target="_blank">Codeur X.</a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--footer end-->

        <!--back-to-top start-->
        <a id="totop" href="#top">
            <i class="fa fa-angle-up"></i>
        </a>
        <!--back-to-top end-->

    </div><!-- page end -->
    <!-- Javascript -->

    <script src="{{ asset('front/js/jquery.min.js') }}"></script>
    <script src="{{ asset('front/js/tether.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery.easing.js') }}"></script>
    <script src="{{ asset('front/js/jquery-waypoints.js') }}"></script>
    <script src="{{ asset('front/js/jquery-validate.js') }}"></script>
    <script src="{{ asset('front/js/jquery.prettyPhoto.js') }}"></script>
    <script src="{{ asset('front/js/slick.min.js') }}"></script>
    <script src="{{ asset('front/js/numinate.min.js') }}"></script>
    <script src="{{ asset('front/js/imagesloaded.min.js') }}"></script>
    <script src="{{ asset('front/js/jquery-isotope.js') }}"></script>
    <script src="{{ asset('front/js/price_range_script.js') }}"></script>
    <script src="{{ asset('front/js/main.js') }}"></script>
    @stack('scripts')
    <!-- Revolution Slider -->

    <script src="{{ asset('front/revolution/js/slider.j') }}s"></script>

    <!-- SLIDER REVOLUTION 6.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->

    <script src='{{ asset('front/revolution/js/revolution.tools.min.js') }}'></script>
    <script src='{{ asset('front/revolution/js/rs6.min.js') }}'></script>

    <!-- Javascript end-->

</body>

</html>

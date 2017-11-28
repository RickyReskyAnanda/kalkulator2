<!DOCTYPE html>
<html class="no-js">
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{$setting->title}}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="{{$setting->meta_description}}" />
    <meta name="keywords" content="{{$setting->meta_keywors}}" />
    <meta name="author" content="{{$setting->meta_author}}" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="ceklokasi.id"/>
    <meta property="og:image" content="{{$setting->meta_ogimage}}"/>
    <meta property="og:url" content="{{$setting->meta_ogurl}}"/>
    <meta property="og:site_name" content="{{$setting->meta_ogsitename}}"/>
    <meta property="og:description" content="{{$setting->meta_ogdescription}}"/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="<?=url('favicon.ico')?>">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('guest/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('guest/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <!-- Superfish -->
    <link rel="stylesheet" href="{{asset('guest/css/superfish.css')}}">

    <link rel="stylesheet" href="{{asset('guest/css/style.css')}}">

    <!-- <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" /> -->
    <link rel="stylesheet" type="text/css" href="{{asset('guest/css/daterangepicker.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('guest/js/modernizr-2.6.2.min.js')}}"></script>
    <script src="{{asset('guest/js/jquery.min.js')}}"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <!-- Include Date Range Picker -->
    
    <!-- auto complete -->
    <!-- JS file -->
    <script src="{{url('guest/js/jquery.autocomplete.min.js')}}"></script> 
    <!-- CSS file -->
    <link rel="stylesheet" href="{{url('guest/css/autocomplete.min.css')}}"> 
    <!-- Additional CSS Themes file - not required-->
    <link rel="stylesheet" href="{{url('guest/css/autocomplete.themes.min.css')}}"> 
 
    </head>
    <body>
        <div id="fh5co-wrapper">
        <div id="fh5co-page">
        <div id="fh5co-header">
            <header id="fh5co-header-section" class="">
                <div class="container">
                    <div class="nav-header">
                        <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle"><i></i></a>
                        <h1 id="fh5co-logo"><a href="{{url('')}}"><img src="{{url('logo.png')}}" height="30px"></a></h1>
                        <!-- START #fh5co-menu-wrap -->
                        <nav id="fh5co-menu-wrap" role="navigation" class="navba">
                            <ul class="sf-menu" id="fh5co-primary-menu">
                                <li class="active">
                                    <a href="{{url('')}}">Beranda</a>
                                </li>
                                <!-- <li>
                                    <a href="{{url('reservasi/cek')}}" class="fh5co-sub-ddown">Cek Pemesanan</a>
                                </li> -->
                                <li>
                                    <a href="{{url('tentang-kami')}}" class="fh5co-sub-ddown">Tentang</a>
                                </li>
                                <li>
                                    <a href="{{url('jadi-partner')}}" class="fh5co-sub-ddown">Jadi Partner</a>
                                </li>
                                <li>
                                    <a href="{{url('bantuan')}}" class="fh5co-sub-ddown">Bantuan</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </header>
            
        </div>
        @yield('content')

        <footer style="color: #fff">
            <div id="footer">
                <div class="container">
                    <div class="row mar-0" style="padding-bottom: 1.5em;">
                        <div class="col-md-3">
                            <strong><h4>Ceklokasi.id</h4></strong>
                            <p>Ceklokasi.id situs reservasi gedung/ruangan terbaik anda di Indonesia secara online dengan cepat dan mudah.</p>
                            
                        </div>
                        <div class="col-md-3">
                            <strong><h4>Produk</h4></strong>
                            <ul>
                                <li><a href="">Gedung Pernikahan</a></li>
                                <li><a href="">Restoran</a></li>
                                <li><a href="">Meeting Room</a></li>
                                <li><a href="">Converence Room</a></li>
                                <li><a href="">Public Space</a></li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <strong><h4>Layanan Pelanggan</h4></strong>
                            <ul>
                                <li><i class="fa fa-building"></i> {{$setting->office_address}}
                                </li>
                                <li><i class="fa fa-clock-o"></i> JAM KERJA<br>
                                {{$setting->working_hour}}</li>
                                <li><i class="fa fa-phone"></i> {{$setting->whatsapp_number}} (WhatsApp)</li>
                                <li><i class="fa fa-envelope-o"></i> {{$setting->contact_email}}</li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <strong><h4>Bisnis</h4></strong>
                            <ul>
                                <li><a href="{{url('cara-pesan')}}">Cara Pesan</a></li>
                                <li><a href="{{url('bantuan')}}">Bantuan</a></li>
                                <li><a href="{{url('tentang-kami')}}">Tentang Kami</a></li>
                                <li><a href="{{url('syarat-ketentuan')}}">Syarat & Ketentuan</a></li>
                                <!-- <li><a href="{{url('kebijakan-privasi')}}">Kebijakan Privasi</a></li> -->
                                <li><a href="{{url('jadi-partner')}}"><strong>Jadi Partner</strong></a></li>
                                <!-- <li><a href="{{url('bisnis')}}">Ceklokasi for Business</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <div class="row" style="border-top: #fff 2px dotted ;padding-top: 1.5em;">
                        <div class="col-md-6 text-center">
                            <h4>Temukan kami di:</h4>
                            <p class="fh5co-social-icons">
                                <a href="{{$setting->facebook}}"><i class="icon-facebook2"></i></a>
                                <a href="{{$setting->instagram}}"><i class="icon-instagram"></i></a>
                                <a href="{{$setting->twitter}}"><i class="icon-twitter2"></i></a>
                            </p>
                        </div>
                        <div class="col-md-6 text-center">
                            <p>© Copyright © 2017 Ceklokasi.id</p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    

    </div>
    <!-- END fh5co-page -->

    </div>
    <!-- END fh5co-wrapper -->

    <!-- jQuery -->
    <!-- jQuery Easing -->
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <script src="{{asset('guest/js/jquery.easing.1.3.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('guest/js/bootstrap.min.js')}}"></script>
    <!-- Waypoints -->
    <script src="{{asset('guest/js/jquery.waypoints.min.js')}}"></script>
    <!-- Stellar -->
    <script src="{{asset('guest/js/jquery.stellar.min.js')}}"></script>
    <!-- Superfish -->
    <script src="{{asset('guest/js/hoverIntent.js')}}"></script>
    <script src="{{asset('guest/js/superfish.js')}}"></script>

    <!-- Main JS (Do not remove) -->
    <script src="{{asset('guest/js/main.js')}}"></script>
    
    <script type="text/javascript">
        $(function() {
            $('input[name="date"]').daterangepicker({
                "singleDatePicker": true,
                "startDate": "{{date('m/d/Y')}}"
            });
        });
    </script>
    <script type="text/javascript">
        function checkScroll(){
            var startY = $('.navba').height() * 2; //The point where the navbar changes in px

            if($(window).scrollTop() > startY){
                $('.navbar').addClass("scrol");
            }else{
                $('.navbar').removeClass("scrol");
            }
        }


        $(window).scroll(function () {
            if ($(window).scrollTop() >= 50) {
                $('#fh5co-header-section').addClass("nav-transparent");
            } else {
                $('#fh5co-header-section').removeClass("nav-transparent");
            }
        });
    </script>
    <!-- Live Chat Widget powered by https://keyreply.com/chat/ -->
    <!-- Advanced options: -->
    <!-- data-align="left" -->
    <!-- data-overlay="true" -->
    <script src="https://linked.chat/web/gdAry3" async></script>
    <div class="back-focus"></div>
    
    </body>
</html>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Temukan Tempat Terbaik Anda</title>

    <link rel="shortcut icon" href="<?=url('favicon.ico')?>">
    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('9su19/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{asset('9su19/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
</head>
<body>
    <nav role="navigation">
        <div class="nav-wrapper container">
            <a id="logo-container" href="#" class="brand-logo"><img src="{{url('logo.png')}}" height="30px" style="margin: 20px 0;"></a>
            <ul class="right hide-on-med-and-down">
                <li><a href="#">Cek Pemesanan</a></li>
                <li><a href="#">Bantuan</a></li>
            </ul>

            <ul id="nav-mobile" class="side-nav">
                <li><a href="#">Cek Pemesanan</a></li>
                <li><a href="#">Bantuan</a></li>
            </ul>
            <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
        </div>
    </nav>

    <div id="index-banner" class="parallax-container">
        <div class="section no-pad-bot">
            <div class="container">
                <h2 class="header center white-text" style="margin-top: 2em;">TEMUKAN TEMPAT TERBAIK ANDA</h2>
                <div class="row center">
                    <h5 class="header col s12 light">Memberikan layanan setiap kebutuhan anda</h5>
                </div>
                <div class="row center">
                    <div class="card" style="background-color:rgba(49, 146, 249, 0.78)">
                      <div class="card-content white-text">
                        
                      </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{{asset('images/header/1.jpg')}}" alt="Unsplashed background img 1"></div>
    </div>


    <div class="container">
        <div class="section">
            <h5 class="center" style="font-size: 1.64 rem;">Kenapa Pesan di Ceklokasi.id</h5>
            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m6 l3">
                    <div class="icon-block">
                        <h2 class="center blue-text"><i class="material-icons">flash_on</i></h2>
                        <h6 class="center f-900">Tempat Terbaik</h6>

                        <p class="light">Kemudahan pencarian membantu menemukan gedung murah sesuai keinginan anda.</p>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="icon-block">
                        <h2 class="center blue-text"><i class="material-icons">group</i></h2>
                        <h6 class="center f-900">Harga Terbaik</h6>

                        <p class="light">Harga awal gedung sama dengan harga di Ceklokasi.id.</p>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="icon-block">
                        <h2 class="center blue-text"><i class="material-icons">settings</i></h2>
                        <h6 class="center f-900">Tanpa Biaya Tambahan</h6>

                        <p class="light">Biaya transaksi seluruh gedung di Ceklokasi.id tidak dikenakan biaya tambahan atau biaya tersembunyi.</p>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="icon-block">
                        <h2 class="center blue-text"><i class="material-icons">settings</i></h2>
                        <h6 class="center f-900">Akses Mudah</h6>

                        <p class="light">Kemudahan akses booking online gedung dengan teknologi website terbaru.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="container">
        <div class="section">
            <h4 class="center">Cara Pemesanan</h4>
            <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m6 l3">
                    <div class="card blue lighten-1">
                        <div class="card-content white-text">
                            <div class="icon-block">
                                <h2 class="center white-text"><i class="material-icons">flash_on</i></h2>

                                <p class="light f-900">Cari dan temukan tempat terbaik anda.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="card ">
                        <div class="card-content">
                            <div class="icon-block">
                                <h2 class="center blue-text"><i class="material-icons">flash_on</i></h2>

                                <p class="light f-900">Atur jadwal reservasi anda.</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col s12 m6 l3">
                    <div class="card blue lighten-1">
                        <div class="card-content white-text">
                            <div class="icon-block">
                                <h2 class="center white-text"><i class="material-icons">flash_on</i></h2>

                                <p class="light f-900">Pembayaran melalui ATM terdekat.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col s12 m6 l3">
                    <div class="card ">
                        <div class="card-content">
                            <div class="icon-block">
                                <h2 class="center blue-text"><i class="material-icons">flash_on</i></h2>

                                <p class="light f-900">Reservasi tempat anda Selesai.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="section">

            <div class="row">
                <div class="col s12 center">
                    <ul class="tabs tab-demo blue-text">
                      <li class="tab"><a href="#tab1">Gedung</a></li>
                      <li class="tab"><a class="active" href="#tab2">Training Center</a></li>
                      <li class="tab"><a href="#tab3">Ruang Konferensi</a></li>
                      <li class="tab"><a href="#tab4">Ruang Meeting</a></li>
                      <li class="tab"><a href="#tab5">Cafe & Resto</a></li>
                      <li class="tab"><a href="#tab6">Coworking Space</a></li>
                    </ul>
                    <div id="tab1" class="col s12"><p>Test 1</p></div>
                    <div id="tab2" class="col s12"><p>Test 1</p></div>
                    <div id="tab3" class="col s12"><p>Test 1</p></div>
                    <div id="tab4" class="col s12"><p>Test 1</p></div>
                    <div id="tab5" class="col s12"><p>Test 1</p></div>
                    <div id="tab6" class="col s12"><p>Test 1</p></div>
                </div>
            </div>

        </div>
    </div>
    <div class="container">
        <div class="section">
            <div class="row">
                <div class="col s12 left">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s8 left">
                                    <span class="card-title">CEKLOKASI.ID</span>
                                    <p>Ceklokasi.id merupakan partner sejumlah Vendor penyewaan gedung/ruangan terpercaya di Makassar. Kami menyediakan sistem manajemen gedung/ruangan mulai dari reservasi hingga manajemen jadwal. Didukung dengan teknologi terkini, Ceklokasi.id menawarkan Management System untuk mempermudah Vendor memperluas market ke seluruh Indonesia.</p>
                                </div>
                                <div class="col s4">
                                    <img src="{{asset('images/about/phone.png')}}" class="responsive-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="parallax-container valign-wrapper">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row center">
                    <h4 class="header col s12 light">TERTARIK MENYEWAKAN TEMPAT ANDA ?</h4>
                    <p>Ayo jadi Partner <a href="https://ceklokasi.id">CEKLOKASI.ID</a> sekarang !</p>
                    <p>Menyewakan tempat jauh lebih mudah dan cepat dengan sistem pelayanan kami<br>
                    Kembangkan usaha anda dengan bergabung bersama kami di <a href="https://ceklokasi.id">CEKLOKASI.ID</a></p>
                    <button class="btn waves-effect waves-light" type="submit" name="action">DAFTAR JADI MITRA CEKLOKASI.ID
                        <i class="material-icons right">send</i>
                    </button>
                </div>
            </div>
        </div>
        <div class="parallax"><img src="{{asset('9su19/background3.jpg')}}" alt="Unsplashed background img 3"></div>
    </div>

    <div class="parallax-container m-h-100 valign-wrapper grey lighten-4" style="min-height: 110px;">
        <div class="section no-pad-bot">
            <div class="container">
                <div class="row">
                    <h6 class="header col m6 black-text">Berlangganan newsletter spesial promo dan penawaran terbaik</h6>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-footer blue">
        <div class="container">
            <div class="row">
                <div class="col l6 s12">
                    <h5 class="white-text">Ceklokasi.id</h5>
                    <p class="grey-text text-lighten-4">Ceklokasi.id situs reservasi gedung/ruangan terbaik anda di Indonesia secara online dengan cepat dan mudah.</p>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Produk</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Gedung</a></li>
                        <li><a class="white-text" href="#!">Restoran</a></li>
                        <li><a class="white-text" href="#!">Meeting Room</a></li>
                        <li><a class="white-text" href="#!">Conference Room</a></li>
                    </ul>
                </div>
                <div class="col l3 s12">
                    <h5 class="white-text">Bisnis</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Cara Pesan</a></li>
                        <li><a class="white-text" href="#!">Bantuan</a></li>
                        <li><a class="white-text" href="#!">Tentang Kami</a></li>
                        <li><a class="white-text" href="#!">Jadi Partner</a></li>
                    </ul>
                </div>
            </div>
            <div class="row" style="border-top: #fff 2px dotted ;padding-top: 1.5em;">
                <div class="col m12 center">
                    <h4>Temukan kami di:</h4>
                    <p>
                        <a href="https://facebook.com/ceklokasi.id"><i class="medium material-icons white-text">highlight_off</i></a>
                        <a href="#"><i class="medium material-icons white-text">highlight_off</i></a>
                        <a href="#"><i class="medium material-icons white-text">highlight_off</i></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
            </div>
        </div>
    </footer>


        <!--  Scripts-->
    <script src="{{asset('9su19/js/jquery-2.1.1.min.js')}}"></script>
    <script src="{{asset('9su19/js/materialize.js')}}"></script>
    <script src="{{asset('9su19/js/init.js')}}"></script>
    <script type="text/javascript">
        function checkScroll(){
            var startY = $('nav').height() * 2; //The point where the navbar changes in px

            if($(window).scrollTop() > startY){
                $('nav').addClass("nav-transparent");
            }else{
                $('nav').removeClass("nav-transparent");
            }
        }


        $(window).scroll(function () {
            if ($(window).scrollTop() >= 50) {
                $('nav').addClass("nav-transparent");
            } else {
                $('nav').removeClass("nav-transparent");
            }
        });
    </script>

</body>
</html>

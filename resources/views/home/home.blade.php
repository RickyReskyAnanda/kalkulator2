@extends('index',['setting' => $setting])

@section('content')

<div class="fh5co-hero">
    <div class="fh5co-overlay"></div>
    <div class="fh5co-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/header/1.jpg')}});">
        <div class="desc">
            <h2>Temukan Tempat Terbaik Anda</h2>
            <span>Memberikan layanan setiap kebutuhan anda</span>
            <span>
                <div class="fh5co-testimonial text-left">
                    <form method="get" action="{{url('s')}}" >
                    <div class="row mar-0">
                        <div class="col-md-4 col-sm-12 pad-0-0-10">
                            <div class="newsletterForm" style="padding-left: 60px;background: #fff;">
                                <img src="{{asset('images/icon/marker.png')}}" alt="Form Newsletter">
                                <!-- <input type="text" id="categories-basic" name="location" class="inputText inputWidth input-focus" placeholder="Dimana Lokasi Anda ?" required> -->
                                <select name="location" class="inputText inputWidth input-focus" style="border: none;border-right: 1px #eee solid;">
                                    <?php for ($i=0; $i < count($regencyCooperate); $i++) { ?>
                                    <option value="{{$regencyCooperate[$i]->id_regency}}" <?php if($i==0)echo "checked"; ?>>{{$regencyCooperate[$i]->name}}</option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <!-- 
                        <div class="col-md-2 col-sm-12 pad-0-0-10">
                            <div class="newsletterForm" style="padding-left: 60px;background: #fff;">
                                <img src="{{asset('images/icon/date.png')}}" alt="Form Newsletter">
                                <input type="text" name="date" class="inputText inputWidth input-focus" style="border: none;border-right: 1px #eee solid;" value="01/01/2015 - 01/31/2015" />
                            </div>
                        </div> -->
                        <div class="col-md-3 col-sm-12 pad-0-0-10">
                            <div class="newsletterForm" style="padding-left: 60px;background: #fff;" >
                                <img src="{{asset('images/icon/cone.png')}}" alt="Form Newsletter">
                                <select class="inputText inputWidth input-focus" style="border: none;border-right: 1px #eee solid;" name="activity" style="padding: 12px 10px">
                                    <option value="0" selected>Semua Acara</option>
                                    <?php for ($i=0; $i < count($event); $i++) { ?>
                                        <option value="<?=$event[$i]->id_event?>">
                                            <?=ucwords($event[$i]->name)?>
                                        </option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 pad-0-0-10">
                            <div class="newsletterForm" style="padding-left: 60px;background: #fff;" >
                                <img src="{{asset('images/icon/user.png')}}" alt="Form Newsletter">
                                <select class="inputText inputWidth input-focus" style="border: none;border-right: 1px #eee solid;" name="capacity">
                                    <option value="1">Semua Kapasitas</option>
                                    <option value="2">0-30</option>
                                    <option value="3">30-100</option>
                                    <option value="4">100-200</option>
                                    <option value="5">Lebih dari 200</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md-2 col-sm-12 pad-0-0-10">
                            <div class="newsletterForm">
                                <button type="submit" class="inputWidth">Cari</button>
                            </div>
                        </div>
                    </div>
                    </form>
                </div>
            </span>
        </div>
    </div>
</div>
<!-- end:header-top -->
<div id="fh5co-work-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section">
                <h3>KENAPA PESAN DI CEKLOKASI.ID</h3>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-3 col-sm-6">
                <div class="services ">
                    <span><i class="fa fa-building" style="color: #3192f9; "></i></span>
                    <h3>Tempat Terbaik</h3>
                    <p style="font-size: 14px">Kemudahan pencarian membantu menemukan gedung murah sesuai keinginan anda</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="services">
                    <span><i class="fa fa-dollar" style="color: #fb7d00"></i></span>
                    <h3>Harga Terbaik</h3>
                    <p style="font-size: 14px">Harga awal gedung sama dengan harga di Ceklokasi.id</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="services">
                    <span><i class="fa fa-user-plus" style="color: #3192f9"></i></span>
                    <h3>Tanpa Biaya Tambahan</h3>
                    <p style="font-size: 14px">Biaya transaksi seluruh gedung di Ceklokasi.id tidak dikenakan biaya tambahan atau biaya tersembunyi</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="services">
                    <span><i class="fa fa-book" style="color: #fb7d00"></i></span>
                    <h3>Akses Mudah</h3>
                    <p style="font-size: 14px">Kemudahan akses booking online gedung dengan teknologi website terbaru</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2 >CARA PEMESANAN</h2>
                <p >Belum Tahu Cara Pesannya ? </p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6  text-center">
                <div class="card">
                    <div>
                       <div class="row">
                            <i class="fa fa-search" style="color: #3192f9;font-size: 70px"></i>
                        </div>
                        <div class="row">
                            <h4>Cari dan temukan tempat terbaik anda</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="card">
                    <div>
                        <div class="row">
                            <i class="fa fa-calendar" style="color: #3192f9;font-size: 70px"></i>
                        </div>
                        <div class="row">
                            <h4 class="">Atur jadwal reservasi anda</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="card">
                    <div>
                        <div class="row">
                            <i class="fa fa-credit-card Try it" style="color: #3192f9;font-size: 70px"></i>
                        </div>
                        <div class="row">
                            <h4>Lakukan pembayaran invoice melalui ATM terdekat</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 text-center">
                <div class="card">
                    <div>
                        <div class="row">
                            <i class="fa fa-check-square-o" style="color: #3192f9;font-size: 70px"></i>
                        </div>
                        <div class="row">
                            <h4>Reservasi Selesai</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2 >Pilih Tipe Ruangan yang Tersedia</h2>
            </div>
        </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tabbable-panel">
                <div class="tabbable-line">
                    <ul class="nav nav-tabs ">
                        <li class="active">
                            <a href="#tab1" data-toggle="tab">Gedung</a>
                        </li>
                        <li>
                            <a href="#tab2" data-toggle="tab">Training Center</a>
                        </li>
                        <li>
                            <a href="#tab3" data-toggle="tab">Ruang Konferensi</a>
                        </li>
                        <li>
                            <a href="#tab4" data-toggle="tab">Ruang Meeting</a>
                        </li>
                        <li>
                            <a href="#tab5" data-toggle="tab">Coffe/Resto</a>
                        </li>
                        <li>
                            <a href="#tab6" data-toggle="tab">Coworking Space</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane active" id="tab1">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Gedung</h2>
                                    <p>Kamu berencana menikah tahun ini atau tahun depan? Salah satu hal yang penting untuk kamu pikirkan adalah gedung pernikahan tempat kamu menggelar perayaan atau resepsi pernikahan nanti. Bila kamu ingin menggelar resepsi pernikahan, jangan terlalu khawatir masalah sewa gedung yang mahal.

                                    Masih banyak, lho, gedung pernikahan di daerah anda yang menawarkan tarif sewa terjangkau bahkan di bawah Rp 10 juta. Enggak percaya ada gedung dengan tarif sewa semurah itu ? cek aja di Ceklokasi.id .</p>
                                </div>
                                <div class="col-sm-6" style="text-align: left;">
                                    <img class="img-responsive" src="{{url('images/about/v1.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab2">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img class="img-responsive" src="{{url('images/about/v2.jpg')}}">
                                </div>
                                <div class="col-sm-6" style="text-align: left;">
                                    <h2>Training Center</h2>
                                    <p>Sebuah perusahaan atau organisasi pasti punya budget tertentu untuk mengadakan sebuah kegiatan. Bahkan akan dicari dengan harga termurah namun tetap dengan fasilitas yang menunjang juga untuk kegiatan yang ingin diadakan. </p>
                                    <p>Ruang meeting private dapat disewa per jam bahkan hingga full day. Temukan berbagai pilihan sewa ruang meeting dengan harga terjangkau dan langsung mendapatkan konfirmasi langsung dari pemilik gedung.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab3">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Ruang Konferensi</h2>
                                    <p>Mencari Ruang Konferensi atau Seminar bersama Ceklokasi.id. Kami bekerja sama dengan vendor yang menyediakan ruangan konferensi atau seminar untuk anda yang mencari sesuai kebutuhan kegiatan anda. </p>
                                    <p>Tempat seminar memang harus dipilih secara detail karena pasti akan mengundang banyak orang dalam seminar tersebut dan dibutuhkan beberapa kriteria dalam pemilihan venue. Biar kamu tidak salah pilih venue.</p>
                                </div>
                                <div class="col-sm-6" style="text-align: left;">
                                    <img class="img-responsive" src="{{url('images/about/v3.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab4">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img class="img-responsive" src="{{url('images/about/v4.jpg')}}">
                                </div>
                                <div class="col-sm-6" style="text-align: left;">
                                    <h2>Ruang Meeting</h2>
                                    <p>Padatnya jadwal meeting membutuhkan perusahaan untuk sewa ruang meeting yang mudah. Ceklokasi.id memberikan kemudahan memilih ruang meeting secara cepat yang dilengkapi dengan fasilitas Free WiFi dan mineral water. </p>
                                    <p>Ruang meeting private dapat disewa per jam bahkan hingga full day. Temukan berbagai pilihan sewa ruang meeting dengan harga terjangkau dan langsung mendapatkan konfirmasi langsung dari pemilik gedung.</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab5">
                            <div class="row">
                                <div class="col-sm-6">
                                    <h2>Coffee/Resto</h2>
                                    <p>Coffee/Resto menyediakan ruangan untuk mengadakan pertemuan yang bisa memuat banyak orang. Harga ruangan yang ditawarkan pun sudah termasuk coffee & snack yang disediakan langsung oleh cafe tersebut. Untuk fasilitas sangat lengkap dan konsep  jadi cocok untuk kamu yang ingin mengadakan acara non formal.
                                    </p>
                                </div>
                                <div class="col-sm-6" style="text-align: left;">
                                    <img class="img-responsive" src="{{url('images/about/v5.jpg')}}">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane" id="tab6">
                            <div class="row">
                                <div class="col-sm-6">
                                    <img class="img-responsive" src="{{url('images/about/v6.jpg')}}">
                                </div>
                                <div class="col-sm-6" style="text-align: left;">
                                    <h2>Coworking Space</h2>
                                    <p>Tempat kerja dengan lokasi dan waktu yang fleksibel dapat Anda dapatkan dengan menyewa coworking space.</p>
                                    <p> Coworking space ini sangat cocok bagi pekerja dengan mobilitas tinggi serta jam kerja yang fleksibel seperti freelancer, mahasiswa, industri kreatif, bisnis modal kecil, startup, SMEs atau UKM perusahaan dengan jumlah karyawan sedikit, karena selain dapat menghemat biaya pengeluaran, juga dapat menambah networking dengan perusahaan lain. 
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- fh5co-work-section -->
<div id="fh5co-services-section">
    <div class="container card">
        <div class="row">
            <div class="col-md-8">
                <h3 class="mar-0" style="margin-bottom: 15px;">CEKLOKASI.ID</h3>
                <div class="col-md-12 pad-0">
                    <div class="image-popup" href="#">
                        <div class="prod-title">
                            <p>Ceklokasi.id merupakan partner sejumlah Vendor penyewaan gedung/ruangan terpercaya di Makassar. Kami menyediakan sistem manajemen gedung/ruangan mulai dari reservasi hingga manajemen jadwal. Didukung dengan teknologi terkini, Ceklokasi.id menawarkan Management System untuk mempermudah Vendor memperluas market ke seluruh Indonesia.</p>
                        </div>
                       
                    </div> 
                </div> 
            </div>
            <div class="col-md-4">
                <img src="{{url('images/about/phone.png')}}" class="img-responsive">
            </div>
        </div>
    </div>
</div>
<!-- fh5co-work-section -->
<div id="fh5co-services-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2>TERTARIK MENYEWAKAN TEMPAT ANDA !</h2>
                <p>Ayo jadi Partner <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name" style="color: #3192f9">CEKLOKASI.ID</a> sekarang !</p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-12 col-sm-12">
               <p>Menyewakan tempat jauh lebih mudah dan cepat dengan sistem pelayanan kami<br> Kembangkan usaha anda dengan bergabung bersama kami di <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name" style="color: #3192f9">CEKLOKASI.ID</a> </p> 
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <a href="{{url('jadi-partner')}}" class="btn" style="background-color: #fb7d00;border-color: #fb7d00;color: #fff">DAFTAR JADI MITRA CEKLOKASI.ID</a>
            </div>
        </div>
    </div>
</div>
<!-- fh5co-services-section -->
<!-- <div id="fh5co-content-section" style="padding-bottom: 5em">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center heading-section">
                <p style="font-size: 20px">Jadilah orang pertama yang mendapatkan informasi diskon dan penawaran menarik Ceklokasi.id !</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 pad-0">
                <div class="newsletterForm">
                    <img src="{{asset('images/icon/mail.png')}}" alt="Form Newsletter">
                    <input type="text" name="emailSubscribe" class="inputText" style="padding-left: 60px" placeholder="Enter your email here">
                    <button>Subscribe</button>
                </div>
            </div>
        </div>
    </div>
</div> -->
<script>
    $(document).ready(function(){
        $(".input-focus").focus(function(){
            $(".back-focus").css("display", "inline");
            $(".fh5co-cover .desc").css("z-index", "12");
            $("#fh5co-header").css("z-index", "3");
        });
        $(document).click(function() {
            $(".back-focus").css("display", "none");
            $(".fh5co-cover .desc").css("z-index", "2");
            $("#fh5co-header").css("z-index", "5");
        });
        $(".fh5co-testimonial").click(function(event) {
            event.stopPropagation();
        });
        $("select").change(function() {
            $(".back-focus").css("display", "none");
            $(".fh5co-cover .desc").css("z-index", "2");
            $("#fh5co-header").css("z-index", "5");
        });
    });
</script>
<script type="text/javascript">
        var options = {

        url: function(phrase) {
            return "{{url('lokasi')}}";
          },

          getValue: function(element) {
            return element.name;
          },

          ajaxSettings: {
            dataType: "json",
            method: "POST",
            data: {
              dataType: "json",
              _token:"{{csrf_token()}}",
            }
          },

          preparePostData: function(data) {
            data.phrase = $("input[name=location]").val();
            return data;
          },

          requestDelay: 400
    };
    $("#categories-basic").easyAutocomplete(options);
    </script>
@endsection
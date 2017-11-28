@extends('index',['setting' => $setting])

@section('content')

<div class="fh5co-hero">
    <div class="fh5co-overlay" style="background-color:rgba(0, 66, 150, 0.71);"></div>
    <div class="fh5co-cover text-center header-a" data-stellar-background-ratio="0.5">
        <div class="desc animate-box" style="top: 230px">
            <h2 style="font-size: 30px">Reservasi Gedung/Ruangan ? Disini Aja ......</h2>
            <div class="container" >
                <span style="font-size: 15px;letter-spacing: 0px;">Ceklokasi.id adalah website yang memprioritaskan pada pengembangan Layanan Reservasi Tempat/Ruangan khususnya di Sulawesi Selatan dan dapat dijangkau di seluruh Indonesia. Pada tanggal 11 Juni 2017, Ceklokasi.id telah berkomitmen untuk memberikan kemudahan dalam reservasi Tempat/Ruangan di Sulawesi Selatan. Ceklokasi.id mendapat sambutan yang positif dari masyarakat khususnya masyarakat Sulawesi Selatan. Kami juga akan terus mengembangkan pelayanan dan keuntungan penggunaan Ceklokasi.id hingga menjangkau seluruh daerah di Indonesia.</span>
            </div>
        </div>
    </div>
</div>
<!-- end:header-top -->
<div id="fh5co-services" style="padding: 2em 0;">
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="row artikel mar-0">
                    <div class="col-md-7">
                        <h3 class="mar-0" style="margin-bottom: 15px;">CEKLOKASI.ID</h3>
                        <div class="col-md-12 pad-0">
                            <div class="image-popup" href="#">
                                <div class="prod-title">
                                    <p>Ceklokasi.id merupakan partner sejumlah Vendor penyewaan gedung/ruangan terpercaya di Makassar. Kami menyediakan sistem manajemen gedung/ruangan mulai dari reservasi hingga manajemen jadwal. Didukung dengan teknologi terkini, Ceklokasi.id menawarkan Management System untuk mempermudah Vendor memperluas market ke seluruh Indonesia.</p>
                                </div>
                               
                            </div> 
                        </div> 
                    </div>
                    <div class="col-md-5" style="text-align: center;">
                        <h4 style="margin:30px 0; color: #000">Anda ingin menjadi mitra kami?</h4>
                        <a href="http://localhost/ceklokasi/public/jadi-partner" class="btn" style="background-color: #fb7d00;border-color: #fb7d00;color: #fff">DAFTAR JADI MITRA KAMI ?</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6  text-center animate-box fadeInUp animated">
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
            <div class="col-md-3 col-sm-6 text-center animate-box fadeInUp animated">
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
            <div class="col-md-3 col-sm-6 text-center animate-box fadeInUp animated">
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
            <div class="col-md-3 col-sm-6 text-center animate-box fadeInUp animated">
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
<!-- END fh5co-services-section -->
<script type="text/javascript">
    function toggleIcon(e) {
        $(e.target)
            .prev('.panel-heading')
            .find(".more-less")
            .toggleClass('glyphicon-plus glyphicon-minus');
    }
    $('.panel-group').on('hidden.bs.collapse', toggleIcon);
    $('.panel-group').on('shown.bs.collapse', toggleIcon);
</script>

@endsection
        
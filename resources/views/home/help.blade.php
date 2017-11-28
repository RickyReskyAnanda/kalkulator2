@extends('index',['setting' => $setting])

@section('content')

<div class="fh5co-hero" style="height: 250px">
    <div class="fh5co-overlay" style="background-color:rgba(0, 66, 150, 0.71);"></div>
    <div class="fh5co-cover text-center header-a" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/header/batik.png')}});">
        <div class="desc animate-box" style="top: 180px">
            <h2>Bantuan</h2>
        </div>
    </div>
</div>
<!-- end:header-top -->
<div id="fh5co-services" style="padding: 2em 0;">
    <div class="container">
        <div class="row row-bottom-padded-lg">
            <div class="col-sm-12">
                <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingOne">
                            <h4 class="panel-title">
                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> 
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Apa itu Ceklokasi.id ?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" aria-expanded="true">
                            <div class="panel-body">
                                  Ceklokasi.id merupakan layanan reservasi tempat/ruangan online di Indonesia. Ceklokasi.id menampilkan hasil pencarian sewa tempat/ruangan Vendor yang telah bekerja sama dengan kami. Harga yang kami tampilkan sesuai dengan harga dari Vendor bersangkutan. Setelah memilih hasil pencarian, anda dapat reservasi langsung di ceklokasi.id.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingTwo">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Bagaimana cara reservasi tempat/ruangan lewat ceklokasi.id ?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                            <div class="panel-body">
                               Cara reservasi tempat/ruangan, dapat Anda lihat <a href="#"> disini</a>.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingThree">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Di mana kantor Ceklokasi.id ?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                            <div class="panel-body">
                                Alamat kantor kami dapat dilihat <a href="">disini</a>.
                            </div>
                        </div>
                    </div>

                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingFour">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Bagaimana cara membayar tempat/ruangan yang saya pesan melalui ceklokasi.id ?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                            <div class="panel-body">
                                Anda bisa memilih metode pembayaran tempat/ruangan yang sesuai dengan anda. Pembayaran invoice melalui transfer hanya ditujukan ke nomor rekening atas nama Ricky Resky Ananda. Untuk lebih lengkapnya silahkan lihat <a href="">disini</a>.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingFive">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Bagaimana cara menghubungi ceklokasi.id ?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                            <div class="panel-body">
                                Anda bisa menghubungi ceklokasi.id Pk 09.00 - 22.00 WITA mulai dari hari Senin sampai dengan Minggu melalui berbagai jalur komunikasi resmi kami di: cs@ceklokasi.id untuk direspon secara cepat atau melalui telepon ke +62 813 555 75. Selengkapnya dapat dilihat di halaman kontak kami.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-primary">
                        <div class="panel-heading" role="tab" id="headingSix">
                            <h4 class="panel-title">
                                <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                    <i class="more-less glyphicon glyphicon-plus"></i>
                                    Apakah harga reservasi tempat/ruangan di Ceklokasi.id berbeda dengan reservasi di tempat ?
                                </a>
                            </h4>
                        </div>
                        <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                            <div class="panel-body">
                                Harga tempat/ruangan di Ceklokasi.id menampilkan harga jujur tanpa tambahan biaya apapun, maksudnya harga tiket sesuai dengan harga tiket dari Perusahaan Otobus yang bekerja sama dengan kami. Kamipun membuat sistem pemesanan tiket yang efisien dan aman. Kami akan terus menjunjung tinggi kepercayaan anda, seperti anda mempercayai perwakilan langganan anda tanpa ada manipulasi harga tiket.
                            </div>
                        </div>
                    </div>

                </div><!-- panel-group -->
    
    
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
        
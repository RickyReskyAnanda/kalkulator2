@extends('index',['setting' => $setting])

@section('content')

<div class="fh5co-hero" style="height: 250px">
    <div class="fh5co-overlay" style="background-color:rgba(0, 66, 150, 0.71);"></div>
    <div class="fh5co-cover text-center header-a" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/header/batik.png')}});">
        <div class="desc" style="top: 180px">
            <h2>Menjadi Mitra</h2>
        </div>
    </div>
</div>
<!-- end:header-top -->
@if (session('status'))
<div id="fh5co-services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center card">
                <h2 style="font-size: 30px;margin : 5px 0 15px; color:#3192f9;">Anda Telah Terdaftar !</h2>
                <p style="text-align: left;">Silahkan tunggu persetujuan dari kami. Informasi persetujuan dan pengisian data lengkap akan dikirimkan melalui E-mail anda.</p>
                <p style="text-align: left;">Info lebih lengkap hubungi kami :<br>
                    <i class="fa fa-phone"></i> {{$setting->whatsapp_number}} (WhatsApp)<br>
                    <i class="fa fa-envelope-o"></i> {{$setting->contact_email}}<br>
                </p>
                <p>
                    Terima Kasih
                </p>
            </div>
        </div>
    </div>
</div>
@else
<div id="fh5co-services-section">
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <h2 style="font-size: 30px;margin : 5px 0 15px;">Jadilah 100 Vendor Pertama Ceklokasi.id</h2>
                <p>Bergabunglah bersama Ceklokasi.id dan Jadilah 100 vendor pertama yang mendapatkan Full Fitur dan Promosi  Gratis di halaman depan Ceklokasi.id</p>
            </div>
            <div class="col-md-7 card">
            <form method="post" action="{{url('jadi-partner')}}">
                {{csrf_field()}}
                <h4 style="color: #3192f9;font-weight: bold;">Informasi Kontak</h4>
                <div class="row" style="margin-bottom: 25px;">
                    <div class="col-sm-6">
                        <div class="newsletterForm">
                            <label>Nama</label>
                            <input class="form-control" type="text" name="nama" class="inputWidth" placeholder="Ketik Nama Anda" required>
                            <span style="color: red">{{ $errors->first('nama') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="newsletterForm">
                             <label>Email</label>
                            <input class="form-control" type="email" name="email" class="inputWidth" placeholder="Ketik Email Anda" required>
                            <span style="color: red">{{ $errors->first('email') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="newsletterForm">
                            <label>No Telepon</label>
                            <input class="form-control" type="number" name="notelp" class="inputWidth" placeholder="Ketik No Telpon/HP Anda" required>
                            <span style="color: red">{{ $errors->first('notelp') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="newsletterForm">
                             <label>Posisi Anda</label>
                            <input class="form-control" type="text" name="posisi" class="inputWidth" placeholder="Ketik Posisi Anda" required>
                            <span style="color: red">{{ $errors->first('posisi') }}</span>
                        </div>
                    </div>
                </div>
                <h4 style="color: #3192f9;font-weight: bold;">Informasi Properti</h4>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="newsletterForm">
                            <label>Nama Properti</label>
                            <input class="form-control" type="text" name="properti" class="inputWidth" placeholder="Ketik Nama Properti Anda" required>
                            <span style="color: red">{{ $errors->first('properti') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="newsletterForm">
                            <label>Kabupaten/Kota</label>
                            <select name="provinsi" class="form-control" required>
                                @foreach($province as $prov)
                                <option value="{{$prov->id}}">{{$prov->name}}</option>
                                @endforeach
                            </select>
                            <span style="color: red">{{ $errors->first('provinsi') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="newsletterForm">
                            <label>Kabupaten/Kota</label>
                            <select name="kabupaten" class="form-control" required>
                                <option>--</option>
                            </select>
                            <span style="color: red">{{ $errors->first('kabupaten') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="newsletterForm">
                            <label>Kecamatan</label>
                            <select name="kecamatan" class="form-control" required>
                                <option>--</option>
                            </select>
                            <span style="color: red">{{ $errors->first('kecamatan') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="newsletterForm">
                             <label>Alamat Properti</label>
                            <textarea class="form-control" name="alamat" maxlength="500" class="inputWidth" placeholder="Ketik Alamat Properti Anda " required></textarea>
                            <span style="color: red">{{ $errors->first('alamat') }}</span>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="newsletterForm">
                            <label>Informasi</label>
                            <textarea class="form-control" name="informasi" class="inputWidth" placeholder="Ketik informasi seperti jumlah ruangan dan jumlah pegawai " required></textarea>
                            <span style="color: red">{{ $errors->first('informasi') }}</span>
                        </div>
                    </div>
                    <div class="col-md-12" style="margin-top: 10px;">
                        <button class="btn pull-right" style="background-color: #fb7d00;border-color: #fb7d00;color: #fff;border-radius: 20px">DAFTAR</button>
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>

<div id="fh5co-work-section" class="fh5co-section-blue">
    <div class="container">
        <div class="row">
            <div class="col-sm-4 text-center">
                <img src="{{url('images/about/1.png')}}" style="width: auto; height: 250px;" class="img-responsive">
            </div>
            <div class="col-sm-8">
                <div class="services fadeInUp animated">
                    <h2>Lebih dalam tentang Ceklokasi.id !</h2>
                    <p style="margin-bottom: .7em">
                        <p>Ceklokasi.id merupakan partner sejumlah Vendor penyewaan gedung/ruangan terpercaya di Makassar. Kami menyediakan sistem manajemen gedung/ruangan mulai dari reservasi hingga manajemen jadwal. Didukung dengan teknologi terkini, Ceklokasi.id menawarkan Management System untuk mempermudah Vendor memperluas market ke seluruh Indonesia.</p>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-content-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2 >Keuntungan Bergabung Bersama Ceklokasi.id</h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 ">
               <div class="row">
                    <div class="col-sm-4 text-center">
                        <i class="fa fa-search" style="color: #3192f9;font-size: 70px"></i>
                    </div>
                    <div class="col-sm-8">
                        <h3>Kemudahan Beroperasi</h3>
                        <p style="text-align: justify;">Sistem kami mempermudah Anda untuk melihat segala laporan dan aktivitas operasional yang terjadi di properti melalui satu portal.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <i class="fa fa-calendar" style="color: #3192f9;font-size: 70px"></i>
                    </div>
                    <div class="col-sm-8">
                        <h3 class="">Pendapatan Berlipat</h3>
                        <p style="text-align: justify;">Perkenalkan properti Anda kepada target pasar baru dengan beragam kalangan selagi meningkatkan okupansi setiap harinya.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <i class="fa fa-credit-card Try it" style="color: #3192f9;font-size: 70px"></i>
                    </div>
                    <div class="col-sm-8">
                        <h3>Dukungan Teknologi</h3>
                        <p style="text-align: justify;">Properti Anda akan mendapatkan dukungan teknologi dari Ceklokasi.id untuk memudahkan berjalannya aktivitas sehari-hari.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-4 text-center">
                        <i class="fa fa-check-square-o" style="color: #3192f9;font-size: 70px"></i>
                    </div>
                    <div class="col-sm-8">
                        <h3>Tetap Buka</h3>
                        <p style="text-align: justify;">Sudah berjualan di website lain ? Tidak perlu khawatir! Anda tetap dapat menjual gedung/ruangan Anda di website lain saat bergabung dengan Ceklokasi.id</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="fh5co-services-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
            </div>
        </div>
    </div>
</div>
<div id="fh5co-services-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-center">
                <h2>TERTARIK MENYEWAKAN TEMPAT ANDA !</h2>
                <p>Ayo jadi Partner <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name" style="color: #3192f9">CEKLOKASI.ID</a> sekarang !</p>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-12 col-sm-12">
               <p>Menyewakan tempat jauh lebih mudah dan cepat dengan sistem pelayanan kami<br> Kembangkan usaha anda dengan bergabung bersama kami di <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name" style="color: #3192f9">CEKLOKASI.ID</a> </p> 
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 text-center">
                <button onclick="topFunction()" id="myBtn" href="#" class="btn" style="background-color: #fb7d00;border-color: #fb7d00;color: #fff">DAFTAR JADI MITRA CEKLOKASI.ID </button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    function topFunction() {
        $('html, body').animate({scrollTop : 180},1000);
    }


    $('select[name=provinsi]').change(function(){
        $('select[name=kabupaten]').html('');
        $.ajax({
            type:'GET',
            url: "{{url('api/v1/region/regency')}}/"+$(this).val(),
            success:function(data){
                for(var i =0 ;i<data.length;i++){
                    $('select[name=kabupaten]').append('<option value="'+data[i]['id']+'">'+data[i]['regency_name']+'</option>');
                }
            },
            error: function(data){
                console.log(data);
            }
        });
    });
    $('select[name=kabupaten]').change(function(){
        $('select[name=kecamatan]').html('');
        $.ajax({
            type:'GET',
            url: "{{url('api/v1/region/district')}}/"+$(this).val(),
            success:function(data){
                for(var i =0 ;i<data.length;i++){
                    $('select[name=kecamatan]').append('<option value="'+data[i]['id']+'">'+data[i]['name']+'</option>');
                }
            },
            error: function(data){
                console.log(data);
            }
        });
    });
</script>
<!-- fh5co-work-section -->
@endif
@endsection

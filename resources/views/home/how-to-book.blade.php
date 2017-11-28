@extends('index',['setting' => $setting])

@section('content')

<div class="fh5co-hero" style="height: 250px">
    <div class="fh5co-overlay" style="background-color:rgba(0, 66, 150, 0.71);"></div>
    <div class="fh5co-cover text-center header-a" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/header/batik.png')}});">
        <div class="desc animate-box" style="top: 180px">
            <h2>Cara Pesan</h2>
        </div>
    </div>
</div>
<!-- end:header-top -->
<div id="fh5co-services">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="fh5co-icon"><img src="{{asset('images/rule/1.png')}}" class="
                img-responsive"></div>
            </div>
            <div class="col-md-8">
                <h4 class="fh5co-number">01.</h4>
                <h2>Cari Tempat/Ruangan Anda</h2>
                <p>Mulai pencarian tempat/ruangan dengan memilih informasi tempat/ruangan anda.</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h4 class="fh5co-number">02.</h4>
                <h2>Pilih dan Pesan Tempat/Ruangan Anda</h2>
                <p>Lokasi, Aktifitas, jenis tempat, dan kapasitas tempat/ruangan akan ditampilkan di hasil pencarian. Pilih dan pesan yang disukai.</p>
            </div>
            <div class="col-md-4">
                <div class="fh5co-icon"><img src="{{asset('images/rule/1.png')}}" class="
                img-responsive"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="fh5co-icon"><img src="{{asset('images/rule/1.png')}}" class="
                img-responsive"></div>
            </div>
            <div class="col-md-8">
                <h4 class="fh5co-number">03.</h4>
                <h2>Lihat Detail dan Atur Jadwal </h2>
                <p>Akan tampil detail tempat/ruangan pesanan anda lalu silahkan atur jadwal reservasi anda dan klik pesan. Masukkan informasi kontak yang dihubungi untuk pengiriman invoice</p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8">
                <h4 class="fh5co-number">04.</h4>
                <h2>Selesaikan Pembayaran</h2>
                <p>Setelah menyelesaikan pembayaran, segera Konfirmasi. Pembayaran hanya dikirimkan ke rekening an Ricky Resky Ananda.</p>
            </div>
            <div class="col-md-4">
                <div class="fh5co-icon"><img src="{{asset('images/rule/1.png')}}" class="
                img-responsive"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-4">
                <div class="fh5co-icon"><img src="{{asset('images/rule/1.png')}}" class="
                img-responsive"></div>
            </div> 
            <div class="col-md-8">
                <h4 class="fh5co-number">05.</h4>
                <h2>Tempat Anda Telah Siap</h2>
                <p>Setelah pembayaran dikonfirmasi, maka reservasi telah selesai. Anda dapat menggunakan tempat/ruangan yang telah anda pesan</p>
            </div>
        </div>
    </div>
</div>
<!-- END fh5co-services-section -->
        
@endsection
        
@extends('index',['setting' => $setting])
@section('content')

<div class="fh5co-hero" style="height: 250px">
    <div class="fh5co-overlay" style="background-color:rgba(0, 66, 150, 0.71);"></div>
    <div class="fh5co-cover text-center header-a" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/header/batik.png')}});">
        <div class="desc animate-box" style="top: 180px">
            <h2>Cek Pemesanan</h2>
        </div>
    </div>
</div>
<!-- end:header-top -->
<div id="fh5co-services-section" style="padding: 3.5em 0;">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                    <div class=" form-group">
                        <label>Kode Pemesanan</label>
                        <div class="newsletterForm">
                            <input type="text" name="emailSubscribe" class="inputText inputWidth" placeholder="Masukkan Kode Pemesanan Anda" style="padding: 10px 12px;min-height: 45px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Email atau No. Handphone (Whatsapp*)</label>
                        <div class="newsletterForm">
                            <input type="text" name="emailSubscribe" class="inputText inputWidth" placeholder="Masukkan Email atau Nomor Handphone Anda" style="padding: 10px 12px;">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="newsletterForm">
                            <button class="inputWidth" style="min-height: 0px;">Cari</button>
                        </div>
                    </div>
            </div>
            <div class="col-md-6">
                <div style="border:2px solid #3192F9;padding:25px 15px;text-align: justify;margin-top: 10px; ">
                    <p>Lengkapi isian berikut untuk melakukan pengecekan pemesanan atau konfirmasi pemesanan Anda di Ceklokasi.id.</p>

                    <p>Silahkan cek email anda untuk mengetahui ID Pesanan.</p>

                    <p>Email dan No. Handphone adalah kontak yang digunakan ketika melakukan pemesanan di Ceklokasi.id.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fh5co-work-section -->
@endsection

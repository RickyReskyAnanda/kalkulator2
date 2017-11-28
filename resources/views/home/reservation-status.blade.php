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
            <div class="col-md-12">
                <h3>Pemesanan Anda Telah Diterima</h3>
                <span>Dear Nurlisah</span>
                <br>
                <span>Terima kasih sudah melakukan pemesanan Gedung Di CekLokasi. Berikut informasi detail tentang pemesanan Anda.</span>
            </div>
            <div class="col-md-12">
                <div style="border:2px solid #3192F9;padding:25px 15px;text-align: justify;margin-top: 10px;border-radius: 4px ">
                    <div class="row">
                        <div class="col-md-6">
                            <table>
                                <tr>
                                    <td class="status">Id Pemesanan</td>
                                    <td class="sts">:</td>
                                    <td>1</td>
                                </tr>
                                <tr>
                                    <td class="status">Status Pemesanan</td>
                                    <td class="sts">:</td>
                                    <td>Menunggu Pemesanan</td>
                                </tr>
                            </table>
                        </div>   
                    </div>
                    <div class="row" style="padding-top: 20px">
                        <div class="col-md-6">
                            <table>
                                <tr>
                                    <td class="status">Metode Pemabayaran</td>
                                    <td class="sts">:</td>
                                    <td>Bni</td>
                                </tr>
                                <tr>
                                    <td class="status">Jumlah Tagihan</td>
                                    <td class="sts">:</td>
                                    <td>IDR 1243</td>
                                </tr>
                                <tr>
                                    <td class="status">Kode Pembayaran</td>
                                    <td class="sts">:</td>
                                    <td>0123456</td>
                                </tr>
                                <tr>
                                    <td class="status">Batas Waktu Pembayaran</td>
                                    <td class="sts">:</td>
                                    <td>3 Juni 2012</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6 text-center">
                            <span>Sisa Waktu Pembayaran</span>
                            <br>
                            <a href="#" class="btn" style="background-color: #fb7d00;border-color: #fb7d00;color: #fff">1 MENIT</a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <h4><b>Penting :</b></h4> 
                            <span>Mohon menyelesaikan pembayaran sebelum Batas Waktu Pembayaran. Apabila melewati batas waktu, pemesanan Anda akan otomatis dibatalkan.</span>
                            <br>
                            <span>Setelah melakukan pembayaran, Anda akan menerima email konfirmasi pembayaran dan voucher AiryRooms Anda akan segera diterbitkan.</span>
                        </div>
                        <div class="col-md-12">
                             <h4><b>Petunjuk Pembayaran Melalui Indomaret</b></h4> 
                             <ol type="1">
                                <li>Catat Kode Pembayaran beserta nominal Jumlah Tagihan Anda.</li>
                                <li>Datangi Indomaret terdekat dengan membawa Kode Pembayaran AiryRooms Anda, beritahukan Kode Pembayaran ke kasir Indomaret.</li>
                                <li>Kasir Indomaret akan mengkonfirmasi transaksi dengan menanyakan Jumlah Tagihan dan Nama Merchant.</li>
                                <li>Konfirmasikan pembayaran Anda ke kasir.</li>
                                <li></li>
                             </ol>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row" style="padding-top: 15px">
            <div class="col-md-12">
                <p>Berikut informasi kamar yang Anda pesan:</p>
                <div style="border:2px solid #3192F9;padding:25px 15px;text-align: justify;margin-top: 10px;border-radius: 4px ;">
                    <h3 style="margin-top: 0px ! important">Airy Panakkukang Pengayoman 5 Makassar</h3>
                    <span>Jln.gdhskjdbaskfb</span>
                    <div class="row" style="margin-top: 15px; font-size: 12px">
                        <div class="col-md-3">
                            <span>Check In :</span>
                            <p>Sel, 03 Okt 2017</p>
                        </div>
                        <div class="col-md-3">
                            <span>Check Out :</span>
                            <p>Sel, 03 Okt 2017</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- fh5co-work-section -->
@endsection

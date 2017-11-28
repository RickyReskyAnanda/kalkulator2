@extends('index',['setting' => $setting])

@section('content')

<div class="fh5co-hero" style="height: 170px">
    <div class="fh5co-overlay" style="height: 170px;background-color:rgba(0, 66, 150, 0.71);" ></div>
    <div class="fh5co-cover text-center header-a" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/header/batik.png')}}); height: 170px">
    </div>
</div>
<!-- end:header-top -->
<div id="fh5co-work-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <ol class="breadcrumb">
                    <li><a href="">Indonesia</a></li>
                    <li><a href="#">Sulawesi Selatan</a></li>
                    <li><a href="#">Makassar</a></li>
                    <li class="active">Balai</li>
                </ol>                         
            </div>
        </div>
        <div class="row">
            <div class="col-md-10">
                <h2 class="mar-0"><?= ucwords($data->name);?></h2>
                <h3 class="mar-0"><small><i><?= ucwords($data->venue->name);?></i></small></h3>
                <span style="font-size: 15px;color: #337ab7;font-weight: 400;">
                <?=ucwords($data->venue->address);?>
                </span>
            </div>
            <!-- <div class="col-md-2 text-right text-center">
                <a href="#fh5co-services-section" class="btn" style="background-color: #ffc607;border-color: #ffc607;color: #000;border-radius: 40px;padding: 7px 25px ">
                    <span style="font-size: 12px">Pesan Mulai dari</span>
                    <br>
                    <span><b>Rp.300.000</b></span>
                </a>
            </div> -->
        </div>
        <?php if(count($data->roomPhoto)>0){ ?>
        <div class="row" style="padding: 20px 0">
            <!-- <div class="col-md-7"> -->
            <div class="col-md-12">
                <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <?php for ($i=0; $i < count($data->roomPhoto); $i++) { ?>
                        <div class="item <?php if($i == 0)echo 'active';?>">
                            <img src="<?=$data->roomPhoto[$i]->url;?>" alt="<?=$data->roomPhoto[$i]->name;?>" style="width:100%;">
                        </div>
                        <?php } ?>
                    </div>
                    <div class="carousel-indicators">
                        <?php for ($i=0; $i < count($data->roomPhoto); $i++) { ?>
                        <img src="<?=$data->roomPhoto[$i]->url;?>" alt="<?=$data->roomPhoto[$i]->name;?>" data-target="#myCarousel" data-slide-to="<?=$i;?>" class="<?php if($i == 0)echo 'active';?>">
                        <?php } ?>
                    </div>

                <!-- Left and right controls -->
                    <!-- <a  href="#myCarousel" data-slide="prev" >
                      <span class="fa fa-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a  href="#myCarousel" data-slide="next">
                      <span class="fa fa-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a> -->    
                </div>
            </div>
            <!-- <div class="col-md-5" style="background-color: #eee;padding-bottom: 15px">
                <div class="row" style="text-align: center;background-color: #FB7D00;">
                    <h3 style="color: #fff;">IDR 250.000/Jam</h3>
                </div>
                <div class="row mar-0">
                        <div style="background-color: #999;margin: 15px 0;    text-align: center;">
                            <label style="text-align: center;color: #fff;">Perjam</label>
                        </div>
                </div>
                <div class="row" style="margin: 15px 0">
                    <div class="col-sm-4 pad-0">
                        <small>Tanggal : </small>
                        <div class="newsletterForm">
                            <input type="text" name="date" class="inputText inputWidth" placeholder="Enter your email here" style="padding:4px 5px; min-height: 35px;font-size:14px;text-align: center">
                        </div>
                    </div>
                    <div class="col-sm-4 pad-0">
                        <small>Jam Mulai : </small>
                        <div class="newsletterForm">
                            <select name="location" class="inputText inputWidth input-focus" style="padding:5px; min-height: 35px;font-size:14px;text-align: center;">
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="col-sm-4 pad-0">
                        <small>Jam Selesai : </small>
                        <div class="newsletterForm">
                            <select name="location" class="inputText inputWidth input-focus" style="padding:5px; min-height: 35px;font-size:14px;text-align: center;">
                                <option></option>
                                <option></option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin: 5px 0">
                    <div class="col-sm-12 pad-0">
                        <small>Tanggal : </small>
                    </div>
                </div>
            </div> -->
        </div>
        <?php }?>
        <div class="row list-detail">
           <label class="col-md-2">Kapasitas</label>
           <div class="col-md-10" style="margin-bottom: 10px;padding-left: 10px">
               <i class="fa fa-users"></i> x <?=$data->capacity;?> Orang
           </div>
        </div>
        <div class="row list-detail">
           <label class="col-md-2">Deskripsi</label>
           <div class="col-md-10" style="margin-bottom: 10px;padding-left: 10px">
               <p><?=ucfirst($data->description);?></p>
           </div>
        </div>
        <div class="row list-detail">
           <label class="col-md-2">Tipe Ruangan</label>
           <div class="col-md-10" style="margin-bottom: 10px;padding-left: 10px;">
               <span class="label label-warning"><?=$data->roomType->type_name;?></span>
           </div>
        </div>
        <div class="row list-detail">
           <label class="col-md-2">Fasilitas</label>
           <div class="col-md-10" style="margin-bottom: 10px;padding-left: 10px">
                <?php foreach ($data->roomFacilityFree as $facility) {?>
                <div class="col-md-4">
                    <img src="<?=$facility->icon_url;?>" style="height: 38px;" onerror="imgError(this);" alt="<?=$facility->name;?>" >
                    <span> <?=ucfirst($facility->name);?></span>
                </div>
                <?php } ?>
           </div>
        </div>
        <div class="row list-detail">
           <label class="col-md-2">Fasilitas Berbayar</label>
           <div class="col-md-10" style="margin-bottom: 10px;padding-left: 10px">
                <?php foreach ($data->roomFacilityPay as $facility) { ?>
                <div class="col-md-6">
                    <img src="<?=$facility->icon_url?>" style="height: 38px;" alt="<?=$facility->name;?>" >
                    <span> 
                        <?=$facility->name;?> 
                        <?php if($facility->price_perday!='0'){ ?>
                            <span class="badge">Rp.<?=number_format($facility->price_perday);?>/Hari</span>
                        <?php } if($facility->price_perhour!='0'){ ?>
                            <span class="badge"><?=number_format($facility->price_perhour);?>/Jam</span>
                        <?php } ?>
                    </span>
                </div>
                <?php } ?>
           </div>
        </div>
        <div class="row list-detail">
           <label class="col-md-2">Kegunaan</label>
           <div class="col-md-10" style="margin-bottom: 10px;padding-left: 10px">
               <?php foreach($data->roomEvent as $event) {?>
               <span class="label label-warning"><?=$event->event->name;?></span>
               <?php } ?>
           </div>
        </div>
        <div class="row list-detail">
           <label class="col-md-2">Jam Operasional</label>
           <div class="col-md-10" style="margin-bottom: 10px;padding-left: 10px">
                <?php foreach ($data->roomOperational as $operational) {?>
                <div>
                    <b style="width:20px;"><?=$operational->day;?> : </b>
                    <span>
                        <?php if($operational->active=='1' && $operational->start!=NULL && $operational->end!=NULL){?>
                        Pk <?=$operational->start.".00";?> - Pk <?=$operational->end.".00";?>
                        <?php }else{
                            echo " Tutup";
                        }
                        ?>
                        
                    </span>
                </div>
                <?php } ?>
           </div>
        </div>
        <div class="row list-detail">
           <label class="col-md-2">Catatan & Aturan</label>
           <div class="col-md-10" style="margin-bottom: 10px;padding-left: 10px">
                <!-- <p>- Dilarang merokok di dalam ruangan </p>
                <p>- Dilarang membawa makanan dari luar</p>
                <p>- Jika jumlah tamu melebihi kapasitas, wajib menginfokan terlebih dahulu ke pihak XWORK</p> -->
                <?=$data->room_rules;?>
           </div>
        </div>
        <div class="row list-detail">
            <label class="col-md-2">Cara Akses Ruangan</label>
            <div class="col-md-10" style="margin-bottom: 10px;padding-left: 10px">
                <!-- <p>- Dekat dengan rumah sakit Mitra Kemayoran, dekat dengan Mega Kemayoran, tidak jauh dari bundaran Jalan Garuda ,  Sebelah Auto 2000 Garuda Toyota , Mangga Dua Square, dekat Monas dan Masjid Istiqlal</p>
                <p>- Akses mudah dari halte busway Benyamin Suaeb kemayoran </p>
                <p>- Masuk dari lobby utama</p>
                <p>-Tunjukkan email konfirmasi dari XWORK setiba di lokasi</p> -->
                <?=$data->room_access;?>
            </div>
        </div>
        <div class="row list-detail">
           <label class="col-md-2">Ukuran Ruangan</label>
           <div class="col-md-10" style="margin-bottom: 10px;padding-left: 10px">
               <div>
                   <b style="width:20px;">Panjang : </b><span> <?=$data->room_long;?> m</span>
               </div>
               <div>
                   <b style="width:20px;">Lebar : </b><span> <?=$data->room_width;?> m</span>
               </div>
               <div>
                   <b style="width:20px;">Plafon/Langit-Langit : </b><span> <?=$data->room_ceiling;?> m</span>
               </div>
               <div>
                   <b style="width:20px;">Luas : </b><span> <?=$data->room_long*$data->room_width;?> m<sup>2</sup></span>
               </div>
           </div>
        </div>
        <div class="row list-detail">
           <label class="col-md-2">Makanan & Minuman</label>
           <div class="col-md-10" style="margin-bottom: 10px;padding-left: 10px">
               <p><?=$data->food_drink;?></p>
           </div>
        </div>
    </div>
</div>

<div class="container" style="padding-bottom: 20px; ">
    <div id="map"></div>
</div>
<!-- <div id="fh5co-services-section" class="fh5co-section-gray">
    <div class="container">
        <h3>Tempat Terdekat Lainnya :</h3>
        <div class="row" style="margin-top: 20px;">
            <?php for ($i=0; $i < 4; $i++) { ?>
            <div class="col-md-3">
                <a href="#">
                    <div class="area-value" style="padding: 0;">
                        <img src="http://placehold.it/500x300" alt="" class="img-responsive">
                        <div class="caption" style="padding: 15px;color: #000;">
                            <h4 style="color:#3192F9;">Thumbnail label</h4>
                            <h5>Tipe : </h5>
                            <span>Meeting Room</span>
                            <div style="margin: 10px 0"><i class="fa fa-users"></i> 65 Orang</div>
                        </div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div> -->
<script src="{{url('guest/js/google_map.js')}}"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCefOgb1ZWqYtj7raVSmN4PL2WkTrc-KyA&callback=initMap"></script>
<script type="text/javascript">
  function imgError(image) {
        // image.onerror = "";
        image.src = "{{url('images/icon/check.png')}}";
        return true;
    }
</script>
@endsection

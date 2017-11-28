@extends('index',['setting' => $setting])

@section('content')
<style>
.spinner {
  margin: 100px auto 0;
  width: 70px;
  text-align: center;
}

.spinner > div {
  width: 18px;
  height: 18px;
  background-color: #333;

  border-radius: 100%;
  display: inline-block;
  -webkit-animation: sk-bouncedelay 1.4s infinite ease-in-out both;
  animation: sk-bouncedelay 1.4s infinite ease-in-out both;
}

.spinner .bounce1 {
  -webkit-animation-delay: -0.32s;
  animation-delay: -0.32s;
}

.spinner .bounce2 {
  -webkit-animation-delay: -0.16s;
  animation-delay: -0.16s;
}

@-webkit-keyframes sk-bouncedelay {
  0%, 80%, 100% { -webkit-transform: scale(0) }
  40% { -webkit-transform: scale(1.0) }
}

@keyframes sk-bouncedelay {
  0%, 80%, 100% { 
    -webkit-transform: scale(0);
    transform: scale(0);
  } 40% { 
    -webkit-transform: scale(1.0);
    transform: scale(1.0);
  }
}
</style>
<div class="fh5co-hero" style="height: 170px">
    <div class="fh5co-overlay" style="height: 170px;background-color:rgba(0, 66, 150, 0.71);" ></div>
    <div class="fh5co-cover text-center header-a" data-stellar-background-ratio="0.5" style="background-image: url({{asset('images/header/batik.png')}}); height: 170px">
    </div>
</div>

<div id="fh5co-work-section" class="fh5co-section-gray">
    <div class="container">
        <div class="row" style="margin:0px;">
            <!-- <div class="col-md-4" style="padding: 0px; margin-top: 10px;">
                <div class="newsletterForm">
                    <img src="https://d2uoadfmtnmth9.cloudfront.net/v1/lib/images/desktop/sprite/front-page/mail-734da22d363297d8866071964faa1e52.png" alt="Form Newsletter">
                    <input type="text" name="emailSubscribe" class="inputText inputWidth" placeholder="Enter your email here">
                </div>
            </div> -->

            <div class="col-md-4" style="padding:0px; margin-top: 10px;">
                <div class="newsletterForm">
                   <small>Lokasi :</small></span>
                    <select name="lokasi" class="inputText inputWidth font-big" style="padding: 12px 10px;">
                        <?php foreach($regencyCooperate as $regency) { ?>
                        <option value="{{$regency->id_regency}}" <?php if($regency->id_regency == $request->location)echo "selected"; ?>>{{$regency->name}}</option>
                        <?php } ?>
                    </select>
                </div>
            </div>
            
            <div class="col-md-4" style="padding:0px ; margin-top: 10px;">
                <div class="newsletterForm">
                    <span><small>Kapasitas :</small></span>
                    <select name="kapasitas" class="inputText inputWidth font-big" style="padding: 12px 10px;">
                        <option value="1" <?php if($request->capacity==1)echo "selected";?>>Semua Kapasitas</option>
                        <option value="2" <?php if($request->capacity==2)echo "selected";?>>1-40 Orang</option>
                        <option value="3" <?php if($request->capacity==3)echo "selected";?>>30-100 Orang</option>
                        <option value="4" <?php if($request->capacity==4)echo "selected";?>>100-200 Orang</option>
                        <option value="5" <?php if($request->capacity==5)echo "selected";?>>Lebih dari 200 Orang</option>
                    </select>
                </div>
            </div>
            <div class="col-md-4" style="padding:0px ; margin-top: 10px;">
                <div class="newsletterForm">
                    <span><small>Urutkan :</small></span>
                    <select name="urutan" class="inputText inputWidth font-big" style="padding: 12px 10px;">
                        <option value="1" selected>Harga Tertinggi</option>
                        <option value="2">Harga Terendah</option>
                        <option value="3">Kapasitas Tertinggi</option>
                        <option value="4">Kapasitas Terendah</option>
                    </select>
                </div>
            </div>
            <!-- <div class="col-md-3" style="padding:0px ; margin-top: 10px;">
                <div class="newsletterForm">
                    <img src="{{asset('images/icon/date.png')}}" alt="Form Newsletter">
                    <input type="text" name="date" class="inputText inputWidth input-focus" value="01/01/2015 - 01/31/2015" />
                </div>
            </div> -->
        </div>
    
        <div class="row area-value">
            <div class="col-sm-8">
                <span id="searchvalue">
                
                </span>
                <div class="row" id="loader">
                    <div class="spinner">
                      <div class="bounce1"></div>
                      <div class="bounce2"></div>
                      <div class="bounce3"></div>
                    </div>
                </div>
            </div>
            <div class="col-sm-4 pad-0">
                <div class="widget-filter">
                    <div class="row" style="margin: 16px 14px">
                        <div class="col-md-12">
                            <h4 class="mar-0">Filter Hasil</h4>
                            <a id="resetfilter" style="cursor: pointer;">Reset Filter</a>
                        </div>
                    </div>
                    <div class="row" style="margin: 16px 14px">
                        <div class="col-md-12">
                            <h4 style="margin-bottom: 16px">Tipe Penyewaan</h4>
                            <div class="row mar-0">
                                <input type="radio" name="tipepenyewaan" class="input-big" value="" checked><span>Jam</span>
                            </div>
                            <div class="row mar-0">
                                <input type="radio" name="tipepenyewaan" class="input-big" value=""><span>Hari</span>
                            </div>
                            <div class="row mar-0">
                                <input type="radio" name="tipepenyewaan" class="input-big" value=""><span>Bulan</span>
                            </div>
                            <div class="row mar-0">
                                <input type="radio" name="tipepenyewaan" class="input-big" value=""><span>Half Day</span>
                            </div>
                            <div class="row mar-0">
                                <input type="radio" name="tipepenyewaan" class="input-big" value=""><span>Full Day</span>
                            </div>
                            <div class="row mar-0">
                                <input type="radio" name="tipepenyewaan" class="input-big" value=""><span>Full Board</span>
                            </div>

                        </div>
                    </div>
                    <div class="row" style="margin: 16px 14px">
                        <div class="col-md-12">
                            <h4 style="margin-bottom: 16px">Tipe Ruangan/Tempat</h4>
                            <div class="row mar-0">
                                <input type="radio" name="tiperuangan" class="input-big" value="0'" checked><span>Semua Tipe</span>
                            </div>
                            <?php for ($i=0; $i < count($roomType); $i++) { ?>
                            <div class="row mar-0">
                                <input type="radio" name="tiperuangan" class="input-big" value="<?=$roomType[$i]->id_room_type?>"><span><?=ucwords($roomType[$i]->type_name)?></span>
                            </div>
                            <?php } ?>
                        </div>
                    </div>
                    <div class="row" style="margin: 16px 14px">
                        <div class="col-md-12">
                            <h4 style="margin-bottom: 16px">Tipe Acara</h4>
                            <div class="row mar-0">
                                <input type="radio" name="tipeacara" class="input-big" value="0" <?php if($request->activity=='0')echo "checked"; ?>><span>Semua Acara</span>
                            </div>
                            <?php for ($i=0; $i < count($event); $i++) { ?>
                            <div class="row mar-0">
                                <input type="radio" name="tipeacara" class="input-big" value="<?=$event[$i]->id_event?>" <?php if($event[$i]->id_event==$request->activity)echo "checked"; ?>><span><?=ucwords($event[$i]->name)?></span>
                            </div>
                            <?php } ?>
                        </div>
                   </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
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
    var delay = (function(){
        var timer = 0;
        return function(callback, ms){
            clearTimeout (timer);

            timer = setTimeout(callback, ms);
        };
    })();
    // $('#s_nama_tempat').keyup(function() {
    //     delay(function(){
    //         searchData();
    //     }, 2000);
    // });

    $('#loader').hide();

    var hasilData ='';

    function appendData(hasil){
        if(hasil.length>0){
            for (var i = 0; i < hasil.length; i++) { 
                var view = '<div class="row list-review">'+
                                '<div class="col-sm-3">'+
                                    '<img src="'+hasil[i]['img_link']+'" class="img-responsive" style="width: 100%" onerror="imgError(this);">'+
                                '</div>'+
                                '<div class="col-sm-5">'+
                                    '<h5>'+hasil[i]["name"]+' , '+hasil[i]["venue_name"]+'</h5>'+
                                    '<p><i class="fa fa-map-marker"></i> '+hasil[i]['regency_name']+'</p>'+
                                    '<p class="mar-0"><label>Tipe:</label></p>'+
                                    '<p class="mar-0">'+hasil[i]['type_name']+'</p>'+
                                '</div>'+
                                '<div class="col-sm-4">'+
                                    '<div class="row mar-0"><label style="color:#FB7D00">IDR '+hasil[i]["main_price"]+'/jam</label></div>'+
                                    '<div class="row mar-0"><label style="font-weight:400"><i class="fa fa-users"></i> '+hasil[i]['capacity']+' pax</label></div>'+
                                    '<div class="row mar-0"><a href="'+hasil[i]['link_detail']+'" class="btn btn-sm btn-info">Pesan</a></div>'+
                                '</div>'+
                            '</div>';
                $('#searchvalue').append(view);
            }
            $('#loader').hide();
        }else{
            var view = '<div class="row list-review" style="text-align:center;">'+
                        '<h3>Pencarian tidak ditemukan !</h3>'+
                        '</div>';
            $('#searchvalue').append(view);
            $('#loader').hide();
        }
    }

    /*NILAI AWAL*/
    var lokasi          = "{{$request->location}}";
    var activity        = "{{$request->activity}}"; 
    var capacity        = "{{$request->capacity}}";
    var sorting         = "1";
    var venue_type      = "0";

    function searchData(){
        $('#searchvalue').html('');
        $('#loader').show();
        $('#resetfilter').hide();
        
        $.ajax({
            type:"POST",
            url: "{{url('s/data')}}",
            data:   "location="+lokasi+
                    "&activity="+activity+
                    "&capacity="+capacity+
                    "&sorting="+sorting+
                    "&venue_type="+venue_type+
                    "&_token={{csrf_token()}}",
            success: function(hasil) {
                $('#resetfilter').show();
                appendData(hasil);
            },
            error:function(hasil){
                $('#searchvalue').html(hasil);
            }
        });
    }
    searchData();

    //EVENT FILTER 
    $("select[name=lokasi]").change(function(){
        lokasi = $(this).val();
        searchData();
    });
    $("select[name=urutan]").change(function(){
        sorting = $(this).val();
        searchData();
    });
    $("select[name=kapasitas]").change(function(){
        capacity = $(this).val();
        searchData();
    });

    $("#resetfilter").click(function(){
        lokasi          = "{{$request->location}}";
        activity        = "{{$request->activity}}"; 
        capacity        = "{{$request->capacity}}";
        sorting         = "1";
        venue_type      = "0";
        searchData();
    });
    $("input[name=tiperuangan]").change(function(){
        venue_type = $(this).val();
        searchData();
    });
    $("input[name=tipeacara]").change(function(){
        activity = $(this).val();
        searchData();
    });

    function imgError(image) {
        image.onerror = "";
        image.src = "{{url('images/room/thumb/default.PNG')}}";
        return true;
    }
</script>
@endsection
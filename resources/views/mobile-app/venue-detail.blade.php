<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Ceklokasi.id</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('m9199/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{asset('m9199/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <style type="text/css">
    .collection{
        margin: 0.2rem 0;
    }
        .collection .collection-item .venue{
            border-radius: 0;
            width:85px !important;
            height:auto !important;
            left:5px !important;
            top:5px !important;
        }
        .collection .collection-item.venue-content{
            padding-left: 100px !important;
        }

       
        .collection .collection-item.avatar{
            min-height: 30px;
        }
        body{
            background: #eee;
        }
        .card{
          box-shadow: 0 0 0 0 rgba(0, 0, 0, 0);
        }
        .card .card-action{
            padding: 5px;
        }
        .card .card-content{
            padding: 15px 15px 0px;
        }
        .row{
            margin-bottom: 0;
        }
        .pad-0{
            padding: 0 !important;
        }
        .mar-0{
            margin: 0;
        }
        .ico-rata{
          display: flex;
          -webkit-tap-highlight-color: transparent;
          line-height: 2;
        }
        .ico-rata .material-icons{
          margin-right: 15px;
        }
        .w-100{
          width: 100% !important;
        }

        .card .card-title {
            font-size: 16px;
            font-weight: 400;
        }
    </style>
</head>
<body>
    <div class="section pad-0">
        <div class="row">
            <div class="col s12 m12 l12 pad-0">
                <div class="card mar-0">
                    <div class="card-image waves-effect waves-block waves-light">
                        <div class="slider">
                            <ul class="slides" style="height: 250px !important;">
                                @foreach($detail->foto_ruangan as $foto)
                              <li>
                                <img src="{{$foto->url}}" alt="{{$foto->name}}"> <!-- random image -->
                              </li>
                              @endforeach
                            </ul>
                          </div>
                    </div>
                    <div class="card-content">
                        <span class="card-title activator grey-text text-darken-4">{{$detail->name.', '.$detail->venue_name}}</span>
                        <p><a href="#">{{$detail->venue_kind}}</a></p>
                    </div>
                    <div class="card-footer" style="padding: 5px;">
                        <a href="#harga" class="waves-effect waves-light amber btn w-100 black-text" >Pesan Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="row">
            <div class="col s12 m12" style="padding: 0;">
                <ul class="collection">
                    <li class="collection-item blue lighten-2">Informasi : </li>
                    <li class="collection-item">
                        <div class="row">
                            @foreach($detail->fasilitas as $fasilitas)
                            <div class="col s6 m6 l6 ico-rata pad-0 mar-0"> <i class="material-icons">check</i> {{$fasilitas->name}}</div>
                            @endforeach
                        </div>
                    </li>
                    <li class="collection-item">
                        <div class="row">
                            <div class="col s12 m12 l12"> <i class="material-icons">place</i> {{$detail->address}}, {{ucwords(strtolower($detail->kota->regency_name))}}</div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12 pad-0">
                <ul class="collection">
                    <li class="collection-item blue lighten-2">Catatan Penting</li>
                    <li class="collection-item">
                      <p>{{$detail->description}}</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class="row" id="harga">
            <div class="col s12 m12" style="padding: 0;">
                <ul class="collection">
                    <li class="collection-item blue lighten-2">Harga Requler</li>
                    <?php if($detail->is_hourly == 1){?>
                    <a href="" class="black-text">
                        <li class="collection-item">Perjam <span class="right blue-text text-darken-1">Rp{{number_format($detail->hour_price)}}</span></li>
                    </a>
                    <?php } if($detail->is_halfday == 1){?>
                    <a href="" class="black-text">
                        <li class="collection-item">Halfday <span class="right blue-text text-darken-1">Rp{{number_format($detail->halfday_price)}}</span></li>
                    </a>
                    <?php } if($detail->is_fullday == 1){?>
                    <a href="" class="black-text">
                        <li class="collection-item">Fullday <span class="right blue-text text-darken-1">Rp{{number_format($detail->fullday_price)}}</span></li>
                    </a>
                    <?php } if($detail->is_fullboard == 1){?>
                    <a href="" class="black-text">
                        <li class="collection-item">Fullboard <span class="right blue-text text-darken-1">Rp{{number_format($detail->fullboard_price)}}</span></li>
                    </a>
                    <?php } if($detail->is_daily == 1){?>
                    <a href="" class="black-text">
                        <li class="collection-item">Daily <span class="right blue-text text-darken-1">Rp{{number_format($detail->day_price)}}</span></li>
                    </a>
                    <?php } if($detail->is_weekly == 1){?>
                    <a href="" class="black-text">
                        <li class="collection-item">Weekly <span class="right blue-text text-darken-1">Rp{{number_format($detail->week_price)}}</span></li>
                    </a>
                    <?php } if($detail->is_monthly == 1){?>
                    <a href="" class="black-text">
                        <li class="collection-item">Monthly <span class="right blue-text text-darken-1">Rp{{number_format($detail->month_price)}}</span></li>
                    </a>
                    <?php } ?>
                </ul>
            </div>
        </div>
        @if(count($detail->paket) >0)
        <div class="row">
            <div class="col s12 m12" style="padding: 0;">
                <ul class="collection">
                    <li class="collection-item blue lighten-2">Harga Paket</li>
                    @foreach($detail->paket as $paket)
                    <a href="" class="black-text">
                        <li class="collection-item">{{$paket->name}} <span class="right blue-text text-darken-2">Rp{{number_format($paket->price)}}</span></li>
                    </a>
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        @if(count($detail->ruangan)>1)
        <div class="row">
            <div class="col s12 m12 l12" style="padding: 0;">
                <ul class="collection">
                    <li class="collection-item blue lighten-2">Ruangan Lain</li>
                    @foreach($detail->ruangan as $ruangan)
                    @if($ruangan->id_room != $detail->id_room)
                    <a href="">
                        <li class="collection-item avatar venue-content">
                            <div class="row">
                                <img src="{{$ruangan->image}}" alt="" class="venue circle ">
                                <span class="title black-text">{{$ruangan->name}}</span>
                                <p class="line-height black-text"><i class="material-icons tiny">group</i> <span>{{$ruangan->capacity}} orang</span></p>
                            </div>
                            <div class="row">
                                <!-- <p class="line-height price">Rp. 6.0000.000 </p> -->
                                <p class="line-height price-p black-text">mulai dari <span class="price blue-text text-darken-1">Rp<?php
                                if($ruangan->is_hourly == 1){
                                    echo number_format($ruangan->hour_price).'/hour';
                                }elseif($ruangan->is_halfday == 1){
                                    echo number_format($ruangan->halfday_price).'/halfday';
                                }elseif($ruangan->is_fullday == 1){
                                    echo number_format($ruangan->fullday_price).'/fullday';
                                }elseif($ruangan->is_fullboard == 1){
                                    echo number_format($ruangan->fullboard_price).'/fullboard';
                                }elseif($ruangan->is_daily == 1){
                                    echo number_format($ruangan->main_price).'/day';
                                }elseif($ruangan->is_weekly == 1){
                                    echo number_format($ruangan->week_price).'/week';
                                }elseif($ruangan->is_monthly == 1){
                                    echo number_format($ruangan->month_price).'/month';
                                }
                            ?>
                            </span> </p>
                            </div>
                        </li>
                    </a>
                    @endif
                    @endforeach
                </ul>
            </div>
        </div>
        @endif
        <div class="row">
            <div class="col s12 m12" style="padding: 0;">
                <ul class="collection">
                    <li class="collection-item blue lighten-2">Ulasan</li>
                  @foreach($detail->komentar as $komen)
                    <li class="collection-item avatar">
                        <i class="material-icons circle">account_circle</i>
                        <span class="title">{{$komen->name}}</span>
                        <p>"{{ucfirst($komen->comment)}}"</p>
                        <a href="javascript:;" class="secondary-content amber-text"><i class="material-icons">grade</i></a>
                    </li>
                  @endforeach
                    <li class="collection-item">
                        <button class="waves-effect waves-light grey lighten-3 btn btn-small black-text" style="width: 100%">Tulis Ulasan</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script src="{{asset('m9199/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('m9199/js/materialize.js')}}"></script>
    <script src="{{asset('m9199/js/init.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
              $('.slider').slider({
                height:210,
                indicators:false,
                interval:4000
              });
        });

    </script>
    </body>
</html>

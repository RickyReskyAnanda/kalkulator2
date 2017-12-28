<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Ceklokasi.id</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:700" rel="stylesheet">
    <link href="{{asset('m9199/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{asset('m9199/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <style type="text/css">
        *{
                font-family: 'Oxygen', sans-serif;
        }
        body{
            background: #eee;
            font-size:12px !important;
        }
        .line-height{
            line-height: 1.6rem;
            color: #000;
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

        .collection .collection-item.avatar{
            padding-left: 100px;
        }
        .collection .collection-item .title{
            font-weight: 500;
            color: #0089ec;
            letter-spacing: .06rem;
            font-size: 13px !important;
        }
        .collection .collection-item{
            padding: 5px 10px;
            margin: 10px 0;
        }
        .collection .collection-item.avatar:not(.circle-clipper) > .circle, .collection .collection-item.avatar :not(.circle-clipper) > .circle{
            border-radius: 0;
            width:85px;
            height:auto;
            left:5px;
            top:5px;
        }
        .collection .collection-item.avatar .secondary-content{
            bottom: 5px;
            right: 20px;
            top:inherit;
        }
        .modal.bottom-sheet{
            top: 0;
            max-height: 100%;
        }
    </style>
</head>
<body>
    <div class="section">
        <div class="row">
            <div class="col s12 m12" style="padding: 0;">
                <ul class="collection">
                @foreach($data as $hasil)
                <a href="{{url('mobile-app/venue/room/'.$hasil->id_room.'?lokasi='.$request->lokasi.'&kegiatan='.urlencode($request->kegiatan).'&min='.$request->min.'&max='.$request->max.'&_token='.csrf_token())}}">
                    <li class="collection-item avatar">
                        <div class="row">
                            <img src="{{$hasil->image}}" alt="" class="circle">
                            <span class="title">{{$hasil->name.' '.$hasil->venue_name}}</span>
                            <p class="line-height"><i class="material-icons tiny">place</i> <?php if(isset($hasil->kecamatan->name))echo $hasil->kecamatan->name;?>, {{$hasil->kota->regency_name}} </p>
                            <p class="line-height" ><i class="material-icons tiny">group</i> <span> {{$hasil->capacity}} orang</span></p>
                        </div>
                        <div class="row">
                            <p class="line-height price-p">mulai dari <span class="price">Rp<?php
                                if($hasil->is_hourly == 1){
                                    echo number_format($hasil->hour_price).'/hour';
                                }elseif($hasil->is_halfday == 1){
                                    echo number_format($hasil->halfday_price).'/halfday';
                                }elseif($hasil->is_fullday == 1){
                                    echo number_format($hasil->fullday_price).'/fullday';
                                }elseif($hasil->is_fullboard == 1){
                                    echo number_format($hasil->fullboard_price).'/fullboard';
                                }elseif($hasil->is_daily == 1){
                                    echo number_format($hasil->main_price).'/day';
                                }elseif($hasil->is_weekly == 1){
                                    echo number_format($hasil->week_price).'/week';
                                }elseif($hasil->is_monthly == 1){
                                    echo number_format($hasil->month_price).'/month';
                                }
                            ?>
                            </span> </p>
                        </div>
                    </li>
                </a>
                @endforeach
              </ul>
            </div>
        </div>
    </div>

    <div id="modal1" class="modal bottom-sheet">
        <div class="modal-footer">
            <a href="#!" class="modal-action modal-close waves-effect waves-green btn-flat">Agree</a>
        </div>
        <div class="modal-content">
            <h4>Modal Header</h4>
            <p>A bunch of text</p>
        </div>
    </div>
    <script src="{{asset('m9199/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('m9199/js/materialize.js')}}"></script>
    <script src="{{asset('m9199/js/init.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("img").on("error", function(){
                $(this).attr('src', '{{asset("m9199/background1.jpg")}}');
            });

        });

    </script>
    </body>
</html>

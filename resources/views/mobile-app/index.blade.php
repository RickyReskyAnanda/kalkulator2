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
        .collection .collection-item.avatar:not(.circle-clipper) > .circle, .collection .collection-item.avatar :not(.circle-clipper) > .circle{
            top:7px;
            width: 30px;
            height: 30px;
            line-height: 30px;
        }
        .collection .collection-item{
            padding: 12px 20px;
            border-bottom: 0; 
        }
        .collection .collection-item.avatar{
            min-height: 30px;
        }
        body{
            background: #eee;
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
    </style>
</head>
<body>
    <div class="container">
        <div class="section">
        <!--   Icon Section   -->
            <div class="row">
                <div class="col s12 m12 l12" style="padding: 0;">
                    <form method="get" action="{{url('mobile-app/venue')}}">
                    <div class="card">
                        <div class="card-content">
                            <div class="row">
                                <div class="col s10 m10 l10 offset-s1 offset-m1 offset-l1">
                                    <p align="center">Cari tempat terbaik anda dengan harga sesuai.</p>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">location_on</i>
                                            <select name="lokasi" required>
                                                <option value="7371" selected>Kota Makassar</option>
                                                <option value="7306">Kab. Gowa</option>
                                            </select>
                                          <label>Lokasi :</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="row">
                                        <div class="input-field col s12">
                                            <i class="material-icons prefix">class</i>
                                            <input type="text" id="kegiatan" name="kegiatan" class="autocomplete" placeholder="Ketik Jenis Acara Anda." required>
                                            <label>Acara dan Kegiatan</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col s12 m12 l12">
                                    <div class="row">
                                        <div class="input-field col s7">
                                            <i class="material-icons prefix">event_seat</i>
                                            <input type="number" value="1" name="min" required>
                                            <label>Minimal </label>
                                        </div>
                                        <div class="input-field col s5" style="padding-left: 0">
                                            <input type="number" value="10" name="max" required>
                                            <label>Maksimal</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card-action">
                            <button type="submit" class="waves-effect waves-light amber btn black-text" style="width: 100%">Lihat Penawaran</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div class="section">
        <div class="row">
            <div class="col s12 m12">
                <span>Mencari Tempat Lain ?</span>
            </div>
        </div>
        <div class="row">
            <div class="col s12 m12" style="padding: 0;">
                <ul class="collection">
                    <li class="collection-item avatar">
                        <i class="material-icons circle green">domain</i>
                        <span class="title">Meeting Room</span>
                    </li>
                    <li class="collection-item avatar">
                        <i class="material-icons circle red">play_arrow</i>
                        <span class="title">Cafe</span>
                    </li>
                    <li class="collection-item avatar">
                        <i class="material-icons circle blue">local_dining</i>
                        <span class="title">Restoran</span>
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
            $('select').material_select();
            var aa ={
              <?php foreach($event as $ev) {?>
              "<?=$ev->name?>": null,
              <?php } ?>
            };
            $('input#kegiatan').autocomplete({
                data: aa,
                limit: 5, 
                onAutocomplete: function(val) {
                },
                minLength: 1, 
            });

        });

    </script>
    </body>
</html>

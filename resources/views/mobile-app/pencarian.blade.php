<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <title>Parallax Template - Materialize</title>

    <!-- CSS  -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="{{asset('m9199/css/materialize.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="{{asset('m9199/css/style.css')}}" type="text/css" rel="stylesheet" media="screen,projection"/>
    <style type="text/css">
        body{
            background: #eee;
        }
        .line-height{
            line-height: 1.5rem;
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
        .collection .collection-item{
            padding: 5px 10px;
        }
        .collection .collection-item.avatar:not(.circle-clipper) > .circle, .collection .collection-item.avatar :not(.circle-clipper) > .circle{
            border-radius: 0;
            width:85px;
            height:auto;
            left:5px;
            top:5px;
        }
    </style>
</head>
<body>
    <div class="section">
        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m12" style="padding: 0;">
                <ul class="collection">
                <li class="collection-item avatar">
                  <img src="{{asset('m9199/background1.jpg')}}" alt="" class="circle">
                  <span class="title">Melia Hotel Makassar Meeting Room</span>
                  <p class="line-height">Tamalate, Kota Makassar </p>
                  <p class="line-height">Rp. 6.0000.000 </p>
                </li>
                <li class="collection-item avatar">
                  <img src="{{asset('m9199/background1.jpg')}}" alt="" class="circle">
                  <span class="title">Title</span>
                  <p class="line-height">First Line 
                  </p>
                  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                </li>
                <li class="collection-item avatar">
                  <img src="{{asset('m9199/background1.jpg')}}" alt="" class="circle">
                  <span class="title">Title</span>
                  <p class="line-height">First Line 
                  </p>
                  <p class="line-height">First Line 
                  </p>
                  <a href="#!" class="secondary-content"><i class="material-icons">grade</i></a>
                </li>
              </ul>
            </div>
        </div>
    </div>

    <footer class="page-footer teal">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12">
                    <h5 class="white-text">Ceklokasi.id</h5>
                    <p class="grey-text text-lighten-4">We are a team of college students working on this project like it's our full time job. Any amount would help support and continue development on this project and is greatly appreciated.</p>
                </div>
                <div class="col s12 m12 l12">
                    <h5 class="white-text">Settings</h5>
                    <ul>
                        <li><a class="white-text" href="#!">Link 1</a></li>
                        <li><a class="white-text" href="#!">Link 2</a></li>
                        <li><a class="white-text" href="#!">Link 3</a></li>
                        <li><a class="white-text" href="#!">Link 4</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                Made by <a class="brown-text text-lighten-3" href="http://materializecss.com">Materialize</a>
            </div>
        </div>
    </footer>

  <!--  Scripts-->
    <script src="{{asset('m9199/js/jquery-2.1.1.js')}}"></script>
    <script src="{{asset('m9199/js/materialize.js')}}"></script>
    <script src="{{asset('m9199/js/init.js')}}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('select').material_select();
            var aa ={
              "Apple": null,
              "Appleas": null,
              "Appsale": null,
              "Appasdle": null,
              "Appdle": null,
              "Appzxcle": null,
              "Apcxple": null,
              "Appzcle": null,
              "Appzxcle": null,
              "Appzxcle": null,
              "Apzxcple": null,
              "Apzxccxvple": null,
              "Apdfgple": null,
              "Aprple": null,
              "Apdsple": null,
              "Appble": null,
              "Apggdpvcle": null,
              "Apzple": null,
              "Apple": null,
              "Apbcple": null,
              "Apxcple": null,
              "Apple": null,
              "Ap le": null,
              "Appccxvle": null,
              "Appvcvle": null,
              "Appxcvle": null,
              "Appxcxle": null,
              "Appvxle": null,
              "Appxle": null,
              "Appcle": null,
              "Apcxvxple": null,
              "Apcvxple": null,
              "Apcvxvple": null,
              "Microsoft": null,
              // "Google": 'https://placehold.it/250x250'
            };
            $('input#lokasi').autocomplete({
                data: aa,
                limit: 5, // The max amount of results that can be shown at once. Default: Infinity.
                onAutocomplete: function(val) {
                  // Callback function when value is autcompleted.
                },
                minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
            });

            $('.datepicker').pickadate({
                selectMonths: true, // Creates a dropdown to control month
                selectYears: 15, // Creates a dropdown of 15 years to control year,
                today: 'Today',
                clear: 'Clear',
                close: 'Ok',
                closeOnSelect: false // Close upon selecting a date,
            });
        });

    </script>
    </body>
</html>

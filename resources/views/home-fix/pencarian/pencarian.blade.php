<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">	
	<title>Ceklokasi.id</title>	
	
	<!-- Meta Tag -->
	<meta name="keywords" content="Ceklokasi" />
	<meta name="description" content="Temukan tempat terbaikmu disini.">
	<meta name="author" content="ceklokas.id">

	<!-- Favicon -->
	<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<!-- CSS -->
	<link href="https://fonts.googleapis.com/css?family=Oxygen" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oxygen:700" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('9ju93/css/materialize.min.css')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.css">
	<link rel="stylesheet" href="{{asset('9ju93/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('9ju93/css/nouislider.css')}}">
	<link rel="stylesheet" href="{{asset('9ju93/css/ceklok.css')}}">

</head>
<body>

	<nav class="blue" role="navigation">
		<div class="nav-wrapper container">
			<a href="{{url('/')}}" class="brand-logo darken-1"><img src="{{asset('9ju93/img/logo.png')}}" alt="Ceklokasi.id"></a></li>
            
			<ul class="right hide-on-med-and-down">
				<li><a href="{{url('reservasi/cek')}}">Cek Pesanan</a></li>
				<li><a href="{{url('bantuan')}}">Bantuan</a></li>
			</ul>
			<ul id="nav-mobile" class="side-nav">
				<li><a href="#">Cek Pesanan</a></li>
				<li><a href="#">Bantuan</a></li>
			</ul>
			<a href="#" data-activates="nav-mobile" class="button-collapse"><i class="icon-menu icons"></i><span class="name"></span></a>
		</div>
	</nav>

	<div class="main">
		<div class="wrapper">
			<section id="content">
		        <!--start container-->
		        <div class="container">
		          	<div class="section">	
		            	<div class="row">
		             		<div class="col s12">
		                		<div class="row">
		                			<div class="col s12 search-ceklok">
		                				<div class="col s4">
		                					<div class="input-field col s12">
			                				<i class="icon-present icons prefix"></i>
			                				<input type="text" id="autocomplete-input" class="autocomplete">
			                				<label for="autocomplete-input">Autocomplete</label>
			                			</div>
			                		</div>
			                		<div class="col s3">
			                			<div class="input-field col s12">
			                				<i class="icon-present icons prefix"></i>
			                				<input type="text" placeholder="30 November 2017">
			                				<label for="first_name">Jenis Acara</label>
			                			</div>
			                		</div>
			                		<div class="col s3">
			                			<div class="input-field col s12">
			                				<i class="icon-calendar icons prefix"></i>
			                				<input type="text" placeholder="30 November 2017" class="datepicker">
			                				<label for="first_name">Tanggal Acara</label>
			                			</div>
			                		</div>
			                		<div class="col s2">
			                			<button class="btn waves-effect waves-light btn-search"><i class="icon-magnifier left icons"></i>Cari</button>
			                		</div>
			                	</div>
		                  		<div class="col s8">
									<div class="col s5 right">
					                  	<ul class="tabs" style="width: 30%;">
					                    	<li class="tab"><a href="#paket" class="">Paket</a></li>
					                    	<li class="tab"><a class="" href="#non-paket">Non Paket</a></li>
									        <li class="indicator" style="right: 359px; left: 288px;"></li>
									    </ul>
									</div>
				                    <div class="col s12 card white list-ceklok">   
					                    <div class="col s3">
					                    	<img class="responsive-img activator materialboxed" src="{{url('9ju93/img/office.jpg')}}" alt="office">
					                    </div>
					                    <div class="col s6">
					                      	<div class="card-content ">
					                        	<a href="#"><span class="card-title tooltipped grey-ceklok-text" data-position="bottom" data-delay="50" data-tooltip="Training Center UIN Alauddin">Training Center UIN Alauddin</span></a>
					                        	<p><a href="#"><i class="icon-location-pin icons"></i> Mamajang, Makassar</a></p>
					                        	<p>Tipe Ruangan: Ruang Meeting</p>
					                      	</div>                  
					                    </div> 
					                    <div class="col s3 center-align right-ceklok">
					                    	<p>Pesan</p>
					                    	<a class="waves-effect waves-light btn btn-pay ">Rp 800.000</a>      
					                    	<p><i class="icon-people icons"></i> 250 pax</p>
					                    </div>                    
					                </div>
					                <div class="col s12 card white list-ceklok">
					                	<div class="col s3">
					                		<img class="responsive-img activator materialboxed" src="{{url('9ju93/img/office.jpg')}}" alt="office">
					                	</div>
					                	<div class="col s6">
					                		<div class="card-content">
					                			<a href="#"><span class="card-title tooltipped grey-ceklok-text" data-position="bottom" data-delay="50" data-tooltip="Training Center UIN Alauddin">Training Center UIN Alauddin</span></a>
					                			<p><a href="#"><i class="icon-location-pin icons"></i> Mamajang, Makassar</a></p>
					                			<p>Tipe Ruangan: Ruang Meeting</p>
					                		</div>                  
					                	</div> 
					                	<div class="col s3 center-align right-ceklok">
					                		<p>Pesan</p>
					                		<a class="waves-effect waves-light btn btn-pay ">Rp 800.000</a>      
					                		<p><i class="icon-people icons"></i> 250 pax</p>
					                	</div>                    
					                </div>
					                <div class="col s12 center">
					                	<ul class="pagination">
										    <li class="disabled"><a href="#!"><i class="mdi-navigation-chevron-left"></i></a></li>
										    <li class="active"><a href="#!">1</a></li>
										    <li class="waves-effect"><a href="#!">2</a></li>
										    <li class="waves-effect"><a href="#!">3</a></li>
										    <li class="waves-effect"><a href="#!">4</a></li>
										    <li class="waves-effect"><a href="#!">5</a></li>
										    <li class="waves-effect"><a href="#!"><i class="mdi-navigation-chevron-right"></i></a></li>
										 </ul>
					                </div>

			            		</div>
					            <div class="col s4">
					            	<div class="card yellow-ceklok filter-ceklok">                      
					            		<div class="card-content grey-ceklok-text">
					            			<span class="card-title">Filter Pencarian</span>

					            			<p><a href="">Reset Filter</a></p>
					            			
					            			<p class="category-ceklok">Kisaran Harga</p>
					            			<div id="slider-range" style="margin: 10px auto 20px auto;"></div>
					            			<div class="col s5"><span id="slider-range-value"></span></div>
					            			<div class="col s2"><i class="icons icon-arrow-right center-align"></i></div>
					            			<div class="col s5"><span id="slider-range-value2"></span></div>
					            			
					            			<p class="category-ceklok">Lokasi</p>
					            			<p class="checkbox-ceklok"><input type="checkbox" id="test1"><label for="test1">Mamajang</label></p>
					            			<p class="checkbox-ceklok"><input type="checkbox" id="test2"><label for="test2">Tamalate</label></p>
					            			<p class="checkbox-ceklok"><input type="checkbox" id="test3"><label for="test3">Tamalanrea</label></p>
					            			
					            			<p class="category-ceklok">Kapasitas</p>
					            			<p><input class="with-gap" name="group1" type="radio" id="test4"><label for="test4">0 > 10</label></p>
					            			<p><input class="with-gap" name="group1" type="radio" id="test5"><label for="test5">10 > 20</label></p>
					            			<p><input class="with-gap" name="group1" type="radio" id="test6"><label for="test6">20 > 80</label></p>
					            			<p><input class="with-gap" name="group1" type="radio" id="test7"><label for="test7">80 > 100</label></p>
					            			<p><input class="with-gap" name="group1" type="radio" id="test8"><label for="test8">100 > dst.</label></p>

					            			<p class="category-ceklok">Tipe Ruangan</p>
					            			<p class="checkbox-ceklok"><input type="checkbox" id="test9"><label for="test9">Meeting Room</label></p>
					            			<p class="checkbox-ceklok"><input type="checkbox" id="test10"><label for="test10">Conference Room</label></p>
					            			<p class="checkbox-ceklok"><input type="checkbox" id="test11"><label for="test11">Tamalanrea</label></p>

					            		</div>
				                    </div>
			                  	</div>
		                	</div>
		              	</div>
		            </div>
		        </div>
		     </div>
        <!--end container-->
      	</section>
  	</div>
</div>

<script src="{{asset('9ju93/js/jquery.min.js')}}"></script>
<script src="{{asset('9ju93/js/materialize.min.js')}}"></script>
<script src="{{asset('9ju93/js/init.js')}}"></script>
<script src="{{asset('9ju93/js/nouislider.js')}}"></script>
<script type="text/javascript">
	var rangeSlider = document.getElementById('slider-range');

noUiSlider.create(rangeSlider, {
	start: [ 4000, 20000000 ],
	tooltips: [ false,false],
	range: {
		'min': [  50000 ],
		'max': [ 20000000 ]
	},
	format: wNumb({
		decimals: 3,
		thousand: '.',
		prefix: 'Rp ',
	})

});

var rangeSliderValueElement = document.getElementById('slider-range-value');
var rangeSliderValueElement2 = document.getElementById('slider-range-value2');

rangeSlider.noUiSlider.on('update', function( values, handle ) {
	rangeSliderValueElement.innerHTML = values[0];
	rangeSliderValueElement2.innerHTML = values[1];
});


</script>

<script>$('.datepicker').pickadate({
    selectMonths: true, // Creates a dropdown to control month
    selectYears: 15, // Creates a dropdown of 15 years to control year,
    today: 'Today',
    clear: 'Clear',
    close: 'Ok',
    closeOnSelect: false // Close upon selecting a date,
  });
</script>

<script>
	$(document).ready(function() {
    $('select').material_select();
  });
           
</script>
<script>
	$('input.autocomplete').autocomplete({
    data: {
      "Apple": null,
      "Microsoft": null,
      "Google": 'https://placehold.it/250x250'
    },
    limit: 20, // The max amount of results that can be shown at once. Default: Infinity.
    onAutocomplete: function(val) {
      // Callback function when value is autcompleted.
    },
    minLength: 1, // The minimum length of the input for the autocomplete to start. Default: 1.
  });
</script>
<body>
</html>
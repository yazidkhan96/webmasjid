@extends('master.master_main')
@section('content')
<div class="container-app">
	<!-- Slider -->
	<div id="myCarousel" class="carousel slide slider-app" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			@foreach(explode(',',$pelatihan->gambar) as $key=> $image)
			<li data-target="#myCarousel" data-slide-to="{{$key}}" class="{{$key == 0 ? 'active':''}}"></li>
		@endforeach
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			@foreach(explode(',',$pelatihan->gambar) as $i=> $image)
			<div class="carousel-item {{$i == 0 ? 'active':''}}">
				<img src="{{asset('images/Pelatihan')}}/{{$image}}">
			</div>
			@endforeach
		</div>

		<!-- Left and right controls -->
		<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left"></span>
			<span class="sr-only">Previous</span>
		</a>
		<a class="right carousel-control" href="#myCarousel" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right"></span>
			<span class="sr-only">Next</span>
		</a>
	</div>
	<!-- End Slider -->
	<div class="row m-0 mt-3">
		<div class="col-md-8 col-lg-9 col-12 p-0">
			<div class="section-app">
				<div class="row m-0 border-bottom">
					<div class="col p-0">
						<div class="title-section-app pb-1">{{$pelatihan->judul_pelatihan}}</div>
						<span class="text-bold">{{$pelatihan->masjid_id}}</span>
						<div>{{$pelatihan->nama_pemateri}}</div>
					</div>
				</div>
				<div class="font-14 mt-3">
					<p>{!!$pelatihan->deskripsi!!}</p>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-lg-3 col-12 p-0 p-l-sm-2">
			<div class="section-app">
				<div class="title-section-app border-bottom mb-2">Lokasi</div>
				<div id="map" style="height: 20rem;"></div>
			</div>
		</div>
	</div>

	<a href="{{url('/daftar_peserta')}}" class="blinking">Daftarkan diri anda</a>
	<input type="hidden" name="" value="" id="latlng">
	<input type="hidden" name="" value="" id="wisata_id">
	<script type="text/javascript">
		var latlng = $('#latlng').val().split(',');
		var lat = parseFloat(latlng[0]);
		var lng = parseFloat(latlng[1]);
		/*  Render Lokasi Maps*/
		function initMap() {
/*    var tmplatlng = $('#latlng').val();
    var latlng = tmplatlng.split(",");
    var x = parseFloat(latlng[0]);
    var y = parseFloat(latlng[1]);*/

    var myLatLng = {lat: lat, lng: lng};

    var map = new google.maps.Map(document.getElementById('map'), {
    	zoom: 8,
    	center: myLatLng
    });

    var marker = new google.maps.Marker({
    	position: myLatLng,
    	map: map,
    	title: 'Hello World!'
    });
} 
</script>
<script async defer
src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDMku8Cv-ld6KagEfwMCmyi4G997TAAZPo&callback=initMap">
</script>
<script type="text/javascript">
	var value_rate = 0;
	var dataUlasan = [];
	$('.ratex').on('mouseover',function () {
		$('.ratex').each(function () {
			$(this).text('radio_button_unchecked');
		});
		var value= parseInt($(this).attr('data'));
		for(var i = 1; i <= value; i++){
			$('#rate'+i).text('radio_button_checked');
		}
	});
	$('.ratex').on('mouseleave',function () {
		$('.ratex').each(function () {
			$(this).text('radio_button_unchecked');
		});
		for(var i = 1; i <= value_rate; i++){
			$('#rate'+i).text('radio_button_checked');
		}
	});
	$('.ratex').click(function () {
		value_rate = parseInt($(this).attr('data'));
		for(var i = 1; i <= value_rate; i++){
			$('#rate'+i).text('radio_button_checked');
		}
	})

	$('#sendUlasan').click(function () {
		if( value_rate == 0){
			alert('rate tidak boleh kosong')
		}
		else if($('#formUlasan').val() == ''){
			alert('Kolom ulasan tidak boleh kosong')
		}
		else{
			dataUlasan = {
				'user_id':$('#user_id').val(),
				'rate':value_rate,
				'ulasan':$('#formUlasan').val()
			}
			console.log(dataUlasan);
			var id_wisata=$('#wisata_id').val();
			$.ajax({
			  url: "/api/user/update/ulasan/"+id_wisata,
			  type: "POST",
			  data:  dataUlasan, 
			  success:function(data){
			    console.log(data,"ini");
			    location.reload();
			  }
			});
		}
	})
</script>
@endsection
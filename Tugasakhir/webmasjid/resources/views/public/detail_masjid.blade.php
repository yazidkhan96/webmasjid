@extends('master.master_main')
@section('content')
@php($wisata=(object)['judul'=>'Masjid Raya','name'=>'Masjid Raya al-mashun','alamat_maps'=>'Medan kota','deskripsi'=>'b','latlng_maps'=>'1,2','id'=>1])
<div class="container-app">
	<div class="row m-0 mt-3">
		<div class="col-md-8 col-lg-9 col-12 p-0">
			<div class="section-app">
				<div class="row m-0 border-bottom">
					<div class="col p-0" style="margin-top: 31px;"> 
						<img src="{{asset('images/Masjid')}}/{{$masjid->gambar}}" style="width: 133% !important;height: 500px !important;">
					</div>
				</div>
				<div class="row m-0 border-bottom">
					<div class="col p-0">
						<div class="title-section-app pb-1">{{$masjid->nama_masjid}}</div>
						<span class="text-bold">{{$masjid->alamat_masjid}}</span>
						<div>{{$masjid->tahun_beridiri}}</div>
					</div>
				</div>
				<div class="font-14 mt-3">
					<p>{!!$masjid->deskripsi!!}</p>
				</div>
			</div>
		
		</div>
		<div class="col-md-4 col-lg-3 col-12 p-0 p-l-sm-2">
			<div class="section-app">
				<div class="title-section-app border-bottom" style="position: relative;top: 585px;">Lokasi</div>
				<div id="map" style="height: 20rem; position: relative;top: 597px;overflow: hidden;"></div>
			</div>
		</div>
	</div>
	<!-- <input type="hidden" name="" value="{{$wisata->latlng_maps}}" id="latlng">
	<input type="hidden" name="" value="{{$wisata->id}}" id="wisata_id"> -->
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
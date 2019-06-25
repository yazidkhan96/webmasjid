@extends('master.master_main')
@section('content')
@php($wisata=(object)['name'=>'Masjid Raya al-mashun','deskripsi'=>'b','latlng_maps'=>'1,2','id'=>1])
<div class="container-app">
	<!-- Slider -->
	<div id="myCarousel" class="carousel slide slider-app" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			@for($i=0;$i<3;$i++)
			<li data-target="#myCarousel" data-slide-to="{{$i}}" class="{{$i == 0 ? 'active':''}}"></li>
			@endfor
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			@for($i=0;$i<3;$i++)
			<div class="carousel-item {{$i == 0 ? 'active':''}}">
				<img src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg">
			</div>
			@endfor
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
						<span class="text-bold">{{$wisata->name}}</span>
					</div>
{{--					<div class="col p-0 text-right pt-3" style="max-width: 170px;">
						@php($sumrate = 0)
						@for($ulasans as $ulasan)
							@php($sumrate += $ulasan->rating)
						@endfor
						@if($sumrate != 0)
							@php($sumrate = round($sumrate/count($ulasans)))
						@endif
						@for($i=0; $i < $sumrate; $i++)
							<i class="material-icons rate">radio_button_checked</i>
						@endfor
						@for($i=0; $i < (5-$sumrate); $i++)
							<i class="material-icons rate">radio_button_unchecked</i>
						@endfor
						<span class="color-app ml-2">{{count($ulasans)}}/Ulasan</span>
						<div class="col p-0 text-right text-bold font-16">{{$wisata->kategori == 1 ? 'Wisata Alam':'Wisata Sejarah'}}</div>
					</div>--}}
				</div>
				<div class="font-14 mt-3">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
				</div>
			</div>
		{{--	<div class="section-app mt-3">
								<div class="title-section-app border-bottom">Ulasan</div>
								@for($ulasans as $ulasan)
								<div class="row m-0 bg-gray mt-2 mb-2 p-3">
									<div class="col p-0 text-center pr-2" style="max-width: 10rem">
										@if($ulasan->user->image == '')
										<img src="{{asset('img/profile.png')}}" class="profile-ulasan">
										@else
										<img src="{{asset('images/user/')}}/{{$ulasan->user->image}}" class="profile-ulasan">
										@endif
										<div class="font-12 mt-2">{{$ulasan->user->name}}</div>
									</div>
									<div class="col p-0">
										<div class="ulasan-rate">
											@for($i=0; $i < $ulasan->rating; $i++)
												<i class="material-icons rate">radio_button_checked</i>
											@endfor
											@for($i=0; $i < (5-$ulasan->rating); $i++)
												<i class="material-icons rate">radio_button_unchecked</i>
											@endfor
										</div>
										<div class="ulasan-desc font-12">
											{{$ulasan->komentar}}
										</div>
									</div>
								</div>
								@endfor
								@guest
								<div class="mt-2 mb-2 p-3" style="background: #d3f1ea">
									<div class="text-center col-12">
										<div class="mb-2">
											Anda harus login terlebih dahulu jika ingin memberikan ulasan.<br>
											Ulasan anda sangat berarti untuk kemajuan wisata ini.
										</div>
									<a href="{{url('login')}}" class="btn btn-app">Login</a>
									</div>
								</div>
								@else
								@if(App\Ulasan::where('user_id',Auth::user()->id)->where('wisata_id',$wisata->id)->first()->rating==0)
								<input type="hidden" name="" value="{{Auth::user()->id}}" id="user_id">
								<div class="row m-0 mt-2 mb-2 p-3" style="background: #d3f1ea">
									<div class="col p-0 text-center pr-2" style="max-width: 10rem">
										@if(Auth::user()->image == '')
										<img src="{{asset('img/profile.png')}}" class="profile-ulasan">
										@else
										<img src="{{asset('images/user/')}}/{{Auth::user()->image}}" class="profile-ulasan">
										@endif
										<div class="font-12 mt-2">{{Auth::user()->name}}</div>
									</div>
									<div class="col p-0">
										<div class="ulasan-rate">
											<i class="material-icons rate ratex" data="1" id="rate1">radio_button_unchecked</i>
											<i class="material-icons rate ratex" data="2" id="rate2">radio_button_unchecked</i>
											<i class="material-icons rate ratex" data="3" id="rate3">radio_button_unchecked</i>
											<i class="material-icons rate ratex" data="4" id="rate4">radio_button_unchecked</i>
											<i class="material-icons rate ratex" data="5" id="rate5">radio_button_unchecked</i>
										</div>
										<div class="ulasan-desc font-12 mt-2">
											<textarea class="form-control" rows="3" id="formUlasan"></textarea>
										</div>
										<div class="text-right mt-2"><button class="btn btn-app" id="sendUlasan">Kirim</button></div>
									</div>
								</div>
								@endif
								@endguest
							</div>--}}
		</div>
		<div class="col-md-4 col-lg-3 col-12 p-0 p-l-sm-2">
			<div class="section-app">
				<div class="title-section-app border-bottom mb-2">Lokasi</div>
				<div id="map" style="height: 20rem;"></div>
			</div>
		</div>
	</div>
	<input type="hidden" name="" value="{{$wisata->latlng_maps}}" id="latlng">
	<input type="hidden" name="" value="{{$wisata->id}}" id="wisata_id">
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
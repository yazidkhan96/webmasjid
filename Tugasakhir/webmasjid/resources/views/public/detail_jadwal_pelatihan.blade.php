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
				<img src="{{asset('images/Pelatihan')}}/{{$image}}" style="object-fit: inherit !important;">
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
		<div class="col-md-4 col-lg-3 col-12 p-0 p-l-sm-2" style="    position: absolute;left: 73%;top: 594px;">
			<div class="section-app">
				<div class="title-section-app border-bottom mb-2">Lokasi</div>
			</div>
		</div>
	</div>

	<a href="{{url('/daftar_peserta')}}" class="blinking">Daftarkan diri anda</a>
	
	<div class="maps" style="position: absolute	;left: 53%; bottom: -469px;">
		<div class="mapouter"><div class="gmap_canvas"><iframe width="308" height="323" id="gmap_canvas" src="{{$pelatihan->maps}}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.org"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
	</div>

@endsection
@extends('master.master_main')
@section('content')
<div class="container-app">
	<!-- Slider -->
	<div id="myCarousel" class="carousel slide slider-app" data-ride="carousel">
		<!-- Indicators -->
		@foreach(explode(',',$galangdana->gambar) as $key=> $image)
			<li data-target="#myCarousel" data-slide-to="{{$key}}" class="{{$key == 0 ? 'active':''}}"></li>
		@endforeach
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
		@foreach(explode(',',$galangdana->gambar) as $i=> $image)
			<div class="carousel-item {{$i == 0 ? 'active':''}}">
				<img src="{{asset('images/Donasi')}}/{{$image}}">
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
						<div class="title-section-app pb-1">{{$galangdana->judul}}</div>
						<span class="text-bold">{{$galangdana->creator}}</span>
						<div>{{$galangdana->batas_waktu}}</div>
					</div>

				</div>
				<div class="font-14 mt-3">
					<p>{!!$galangdana->deskripsi!!}</p>
				</div>
			</div>
		<div class="col-md-4 col-lg-3 col-12 p-0 p-l-sm-2">
			<div class="section-app">
				<div class="title-section-app border-bottom" style="position: relative;left: 419%;bottom: 141px;">Donasi<br>
				</div>
				<div class="donasi-total">
				<span>Rp.{{$galangdana->donasi->where('status','bayar')->sum('jumlah_donasi')}};</span><br><br>
				<span>Terkumpul dari : {{$galangdana->biaya_yang_dibutuhkan}}</span><br><br>
				<a href="{{url('/payment_donasi',$galangdana->id)}}" class="btn btn-danger" style="padding: 8px 44px;">DONASI SEKARANG</a>
				</div>
				<div id="map" style="height: 20rem;"></div>
			</div>
		</div>
	</div>	
</script>
<script type="text/javascript">

</script>
@endsection
@extends('master.master_main')
@section('content')
<div class="container-app">
	<!-- Slider -->
	<div id="myCarousel" class="carousel slide slider-app" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			@foreach(explode(',',$penyerahan->gambar) as $key=> $image)
			<li data-target="#myCarousel" data-slide-to="{{$key}}" class="{{$key == 0 ? 'active':''}}"></li>
		@endforeach
		</ol>
		<!-- Wrapper for slides -->
		<div class="carousel-inner">
			@foreach(explode(',',$penyerahan->gambar) as $i=> $image)
			<div class="carousel-item {{$i == 0 ? 'active':''}}">
				<img src="{{asset('images/Penyerahan')}}/{{$image}}" style="object-fit: contain; !important;">
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
	<div class="form-group" style="position: relative;top: 16px;">
	    <label for="exampleFormControlTextarea1">Informasi zakat :</label>
	    <p>{!!$penyerahan->keterangan!!}</p>
	  </div>
		<div class="alert" style="width: 415px; position: relative;left: 32%; top: 14px; background-color: #f8f8f8; border-color: #f8f8f8; "><strong style="font-size: 14px; ">Terima kasih untuk para donatur yang sudah mempercayakan zakat nya kepada kami.
		Dan terima kasih sudah menggunakan website kami sebagai media penyaluran zakat anda</strong>
		</div>
@endsection
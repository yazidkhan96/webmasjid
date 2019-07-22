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
	<div class="maps" style="position: absolute	;left: 51%; bottom: -520px;">
		<div class="mapouter"><div class="gmap_canvas"><iframe width="308" height="323" id="gmap_canvas" src="{{$masjid->maps}}" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.org"></a></div><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div>
	</div>
	
<!-- Special 20% Discount for Elegant Themes Divi Page Builder https://www.embedgooglemap.net/divi-sale/ -->
<!-- Special 20% Discount for Elegant Themes Divi Page Builder https://www.embedgooglemap.net/divi-sale/ -->
	<!-- <input type="hidden" name="" value="{{$wisata->latlng_maps}}" id="latlng">
	<input type="hidden" name="" value="{{$wisata->id}}" id="wisata_id"> -->
	
@endsection
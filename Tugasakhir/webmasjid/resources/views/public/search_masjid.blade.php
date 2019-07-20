@extends('master.master_main')
@section('content')

<div class="container-app mt-4">
	<div class="font-24 mb-5 mt-5"><i>Pencarian Masjid : {{$key}}</i></div>
	@if(count($results) == 0)
		<div class="text-center"><img src="{{asset('img/search-bar.gif')}}"></div>
	@else
	<div class="row">
		@foreach($results as $result)
		<div class="col-md-3 col-6 mb-4">
			<a href="{{url('detail/masjid',$result->id)}}">
				<div class="thumb-img">
					@if(!$result->gambar)
					<img src="{{asset('img/search-bar.gif')}}">
					@else
					<img src="{{asset('images/Masjid')}}/{{$result->gambar}}">
					@endif
				</div>
			</a>
			<a href="{{url('detail/masjid',$result->id)}}">
				<div class="thumb-title font-18">{{$result->judul}}</div>
			</a>
			<div class="thumb-desc">
				{!!$result->deskripsi!!}
			</div>
		</div>
		@endforeach
	</div>
	@endif
</div>
@endsection
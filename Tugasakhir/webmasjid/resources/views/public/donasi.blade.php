@extends('master.master_main')
@section('content')
<div class="row">
	@foreach(App\Galang_dana::take(10)->get() as $galangdana)
	<div class="col-6 col-md-4 mb-5">
		<div class="card" style="width: 85%;position: relative;top: 144px;left: 6%;">
		  <a href="{{url('/detail_donasi',$galangdana->id)}}"><img src="{{asset('images/Donasi')}}/{{explode(',',$galangdana->gambar)[0]}}" class="card-img-top" alt="..." style="height: 	178px;"></a>

		  <div class="card-body" style="height: 151px;">
		    <a href="{{url('/detail_donasi',$galangdana->id)}}"><strong class="card-text">{{$galangdana->judul}}</strong></a>
		  </div>
			 <div class="card-text" style="position: relative;bottom: 59px;left: 6%;">
			  	<em>{{$galangdana->creator}}</em>
			 </div>
			 <div class="card-text" style="position: relative;top: -30px;left: 23px;">
			  	<span>Terkumpul :</span><br>
			  	<span>{{$galangdana->donasi->where('status','sudahbayar')->sum('jumlah_donasi')}};</span>
			 </div>
			 <div class="card-text" style="position: relative;left: 74%;bottom: 76px;">	
			 		<span>sisa hari :</span><br>	
			 		<span>{{$galangdana->batas_waktu}}</span>
			 		<span style="position: relative;right: 73%;top: 33px;">Target Dana : {{$galangdana->biaya_yang_dibutuhkan}} </span> <br>
			 </div>
		</div>
	</div>
	@endforeach
	<br>
</div>
@if(Auth::user())
<div class="text-right mb-3">
		<a class="btn btn-app" href="{{url('/tambah/galang/dana')}}" style="position: relative;bottom: 401px;right: 39px;">Tambah Galang Dana</a>
</div>
@endif

<script type="text/javascript">
	
</script>



@endsection
@extends('master.master_main')
@section('content')

<div class="row">
	@for($i=0;$i<5;$i++)
	<div class="col-6 col-md-4 mb-5">
		<div class="card" style="width: 85%;position: relative;top: 144px;left: 6%;">
		  <a href="{{url('/detail_donasi')}}"><img src="{{asset('/img/msj1.jpg')}}" class="card-img-top" alt="..." style="height: 	178px;"></a>

		  <div class="card-body" style="height: 151px;">
		    <a href="{{url('/detail_donasi')}}"><strong class="card-text">Bantu BKM Masjid Al-Waqif memperbaiki masjidnya</strong></a>
		  </div>
			 <div class="card-text" style="position: relative;bottom: 59px;left: 6%;">
			  	<em>Username</em>
			 </div>
			 <div class="card-text" style="position: relative;top: -30px;left: 23px;">
			  	<span>Terkumpul :</span><br>
			  	<span>0;</span>
			 </div>
			 <div class="card-text" style="position: relative;left: 74%;bottom: 76px;">	
			 		<span>sisa hari</span><br>	
			 		<span>-;</span>
			 		<span style="position: relative;right: 57%;top: 33px;">Target Dana : </span> <br>
			 </div>
		</div>
	</div>
	@endfor
	<br>
</div>





@endsection
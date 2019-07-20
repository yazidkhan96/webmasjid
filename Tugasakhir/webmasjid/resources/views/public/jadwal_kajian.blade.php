@extends('master.master_main')
@section('content')
<div class="input-group md-form form-sm form-1 pl-0" style="width: 25%; position: relative; top: 58px; left: 74%;">
  <div class="input-group-prepend">
    <span class="input-group-text bg-success lighten-2" id="basic-text1"><i class="fa fa-search text-white"
        aria-hidden="true"></i></span>
  </div>
  <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search">
</div>

<a href="{{url('/tambah_kajian')}}" class="btn btn-app" style="position: absolute;right: 81%;top: 63px;">Tambah Jadwal kajian</a>
<div class="container">
	@foreach(App\Jadwal_kajian::all() as $jadwalkajian)
	<div id="accordion">
		<div class="card" style="position: relative; top: 100px;">
			<div class="card-header">
				<a class="card-link" data-toggle="collapse" href="#collapse{{$jadwalkajian->id}}">
					<strong class="tgl-kajian">{{$jadwalkajian->tanggal_kajian}}</strong><strong class="tema-kajian">{{$jadwalkajian->tema_kajian}}</strong><br>
					<strong class="bln-kajian">{{$jadwalkajian->bulan_kajian}}</strong>
					<strong class="nama-ustadz">{{$jadwalkajian->nama_ustadz}}</strong><br>
					<strong class="waktu-kajian"><i class="fa fa-clock-o"></i>   {{$jadwalkajian->waktu_kajian}}</strong>
					<strong class="lokasi-masjid"><i class="fa fa-map-marker"></i>
					{{$jadwalkajian->masjid->nama_masjid}}</strong><br>
					<em class="kota-kajian">alamat:{{$jadwalkajian->lokasi}}</em>
				</a>
				<div id="collapse{{$jadwalkajian->id}}" class="collapse" data-parent="#accordion">
					<div class="content col-lg-10">
						<div class="row">
							<div class="container">
								<div class="row" style="position: relative; right: 55px;">
									<div class="col-5 border" style="">
										<i class="fa fa-clock-o"></i>
										<strong>WAKTU</strong><br>
										<em>{{$jadwalkajian->waktu_kajian}}</em>
									</div>
									<div class="col-7 border" style="height: 148px;">
										<strong style=""><i class="fa fa-map-marker"></i>  Lokasi (Lihat Peta)</strong><br>
										<em>{{$jadwalkajian->lokasi}}</em>
									</div>
								</div>
								<div class="row border" style=" height: 33px; position: relative; right: 55px;">
									<div class="col-3">
										<div class="row">
											<div class="col-3">
												<a href="#" class="fa fa-facebook" style="font-size: 15px; color: gray;"></a>
											</div>
											<div class="col-3">
												<a href="#" class="fa fa-twitter" style="font-size: 15px; color: gray;"></a>
											</div>
											<div class="col-3">
												<a href="#" class="fa fa-linkedin" style="font-size: 15px; color: gray;"></a>
											</div>
											<div class="col-3">
												<a href="#" class="fa fa-envelope" style="font-size: 15px; color: gray;"></a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endforeach
</div>
<div class="row" style="margin-left: 83px;">
	<div class="col-7 kirim-jadwal">
		<strong>Jadwal kajian yang anda cari belum ada ?</strong><br><br>
		<button class="btn btn-info btn-lg"><a style="color: white;" 
		href="{{url('/request_kajian')}}">Request kajian</a></button>
	</div>
</div>




@endsection
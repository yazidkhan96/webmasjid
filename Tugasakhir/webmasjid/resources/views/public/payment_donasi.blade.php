@extends('master.master_main')
@section('content')
<div class="card" style="width: 34%;position: relative;left: 36%;top: 106px;" >
	<div class="card-body" style="height: 98px;">
		<img src="{{asset('/img/msj1.jpg')}}" style="width: 70px; height: 70px;">
		<em class="card-subtitle" style="position: relative;bottom: 23px;left: 5px;">Anda akan berdonasi untuk :</em>
		<p  style="position: relative;bottom: 47px;left: 19%;">Judul donasi</p>
	</div>
</div>
<div class="card" style="width: 34%;position: relative;left: 36%;top: 128px;">
	<ul class="list-group list-group-flush" style="height: 250px;">
		<li class="list-group-item">
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">RP</span>
				</div>
				<input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" id="hzakatpro1">
			</div>
			<p>
				<a class="border-top border-bottom" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample" style="text-decoration: none;color: black;font-size: 22px;padding: 0px 110px;">
					Metode Pembayaran
				</a>
			</p>
			<div class="collapse" id="collapseExample">
				<div class="card card-body">
					<form>
						<div class="radio">
							<input type="radio" name="bank" value="bni"><img src="{{asset('/img/Bni.png')}}" style="width: 49px; position: relative; left: 3px; bottom: 2px;">		<em>Transfer Bni</em>
						</div>
						<div class="radio">
							<input type="radio" name="bank" value="bca"><img src="{{asset('/img/bca.jpg')}}" style="width: 49px; position: relative; left: 1px; bottom: 5px;">		<em>Transfer Bca</em>
						</div>
						<div class="radio">
							<input type="radio" name="bank" value="bri"><img src="{{asset('/img/bri.png')}}" style="width: 49px; position: relative; left: 4px; bottom: 2px;">		<em>Transfer Bri</em>
						</div>
						<div class="radio">
							<input type="radio" name="bank" value="mandiri"><img src="{{asset('/img/mandiri.jpg')}}" style="width: 49px; position: relative; left: 1px; bottom: 5px;">		<em>Transfer Mandiri</em>
						</div>
					</form>
				</div>
			</div>
			<input type="text" class="form-control" name="nama" placeholder="Nama"><br>
			<input type="email" class="form-control" name="email" placeholder="Email">
		</li>
		<span><a href="{{url('/detail_payment_donasi')}}" class="btn-more btn btn-primary" role="button" style="color: white !important;position: relative;left: 3%;top: 49px;padding: 5px 133px;">Lanjutkan pembayaran</a></span>
	</ul>
</div>
@endsection
@extends('master.master_main')
@section('content')
<div class="card payment" style="width: 34%;position: relative;left: 36%;top: 106px;" >
	<div class="card-body" style="height: 98px;">
		<img src="{{asset('images/Donasi')}}/{{explode(',',$galangdana->gambar)[0]}}" style="width: 70px; height: 70px;">
		<em class="card-subtitle" style="position: relative;bottom: 23px;left: 5px;">Anda akan berdonasi untuk :</em>

		<p style="position: relative;bottom: 47px;left: 19%;" id="juduldonasi">{{$galangdana->judul}}</p>
	</div>
</div>
<div class="card payment"style="width: 34%;position: relative;left: 36%;top: 128px;">	
	<ul class="list-group list-group-flush" style="height: 250px;">
		<li class="list-group-item">
			<div class="input-group mb-2">
				<div class="input-group-prepend">
					<span class="input-group-text" id="basic-addon1">RP</span>
				</div>
				<input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" id="jumlahdonasi">
			</div>
			<input type="text" class="form-control" name="nama" placeholder="Nama" id="nama"><br>
			<input type="email" class="form-control" name="email" placeholder="Email" id="email">
		</li>
		<span><a class="btn-more btn btn-app" role="button" id="pembayaran" style="color: white !important;position: relative;left: 3%;top: 23px;padding: 5px 133px;">Lanjutkan pembayaran</a></span>
	</ul>
</div>
<div class="card hidden" style="width: 41%;position: absolute;left: 30%;top: 99px;" id="intruksi">
	<div class="card-body">
		<h5 class="card-title" style="position: relative;left: 29%;">Intruksi pembayaran</h5>
		<p class="card-text" style="text-align: center;">Transfer tepat sesuai nominal berikut.</p>
		<span style="font-weight: bold; font-size: 27px; position: relative; left: 27%; bottom: 13px;">RP.<strong id="nilai_tf">0000</strong></span>
		<div class="alert alert-primary" style="width: 415px; position: relative;left: 10%; bottom: 11%; background-color: #fff70033; border-color: #fff70033; "><strong style="font-size: 14px; ">PENTING! Transfer Ke Virtual account yang sesuai agar donasi anda dapat diproses</strong>
		</div>
	</div>
</div>
<div class="card hidden" id="pembayaran" style="width: 41%;height: 200px;position: relative;left: 30%;top: 307px;">
	<div class="card-body">
		<span>
			<p>Transfer ke Virtual account berikut :<span id="virtual_account"></span>  </p>
		</span>
	</div>
</div>
	<div class="alert alert-primary hidden" id="alert" style="width: 30%;position: relative;left: 35%;
    top: 201px; background: #fcfcfc; "><strong style="font-size: 14px; ">Transfer sebelum 11 Jun 2019 10:00 WIB atau donasi Anda otomatis dibatalkan oleh sistem.</strong>
	</div>

<script type="text/javascript">
$('#pembayaran').click(function() {
	let max=9999999999;
	let min=1111111111;
	let  dataAll = ({
	  'status': 'pending',
	  'galangdana': '{{$galangdana->id}}',
	  'namabank': 'BNI',
	  'juduldonasi': $('#juduldonasi').text(),
	  'nama': $('#nama').val(),
	  'email': $('#email').val(),
	  'virtual_account': Math.floor(Math.random() * (max - min)) + min,
	  'jumlahdonasi': $('#jumlahdonasi').val(),
	  });
	console.log(dataAll)
	$.ajax({
	  url: '/api/payment/donasi/',
	  type: "POST",
	  data:  dataAll,
	success:function(data){
		$('#nilai_tf').text(dataAll.jumlahdonasi);
		$('#virtual_account').text(dataAll.virtual_account);
		$('.hidden').show();
		$('.payment').hide();
	}
	});
});
</script>
@endsection
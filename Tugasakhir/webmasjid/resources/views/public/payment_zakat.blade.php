@extends('master.master_main')
@section('content')

<div class="card identitas" style="width: 34rem; margin-left: 2rem;
	margin-top: 10rem;" id="hide-perhitungan">
	<div class="card-header">
		<div class="title-zakat" style="text-align: center;">
			<span><i class="fa fa-address-card" style="font-size: 32px; position: relative;"></i></span>
			<span style="position: relative;top: -5px;left: 5px;">Identitas
			</span>
		</div>
	</div>
	<div class="card-body identitas">
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Zakat</span>
			</div>
			<input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" id="zakat" readonly value="{{Illuminate\Support\Facades\Input::get('zakat')}}">
			<input type="hidden" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" id="jenis" readonly value="{{Illuminate\Support\Facades\Input::get('jenis')}}">
		</div>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Nama</span>
			</div>
			<input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" id="nama"><br>
		</div>
			<em style="position: relative;bottom: 23px;right: -68px;">Noted: Pisahkan nama dengan koma , jika zakat fitrah</em>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Email</span>
			</div>
			<input type="Email" class="form-control" aria-label="Username" aria-describedby="basic-addon1" id="email">
		</div>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Nomor handphone</span>
			</div>
			<input type="text" class="form-control input-number" aria-label="Username" aria-describedby="basic-addon1" id="no_hp">
		</div>
	</div>
	<a class="btn btn-app" id="btn-zakat">Lanjut Ke pembayaran</a>
</div>
<div class="col-md-12 mt-5 hidden detail-pembayaran" style="position: relative;top: 5rem;">
	<div id="stepper3" class="bs-stepper vertical">
		<div class="bs-stepper-header">
			<div class="step" data-target="#test-lv-1">
				<button type="button" class="btn step-trigger">
				<span class="bs-stepper-circle">Rp</span>
				<span class="bs-stepper-label">Detail zakat</span>
				</button>
				<hr class="ln1" style="position: relative;left: 4rem;bottom: 2rem;
				width: 50rem;">
				<strong style="position: relative;left: 46rem;bottom: 2rem;">Rp 
					<input type="text" class="detailzakat" readonly value="{{Illuminate\Support\Facades\Input::get('zakat')}}"></strong>
				<div class="alert alert-primary" style="width: 322px; position: relative;
					left: 69%; bottom: 11%;">
					<strong style="font-size: 14px; ">PENTING! Transfer ke Virtual account yang sesuai agar zakat Anda dapat diproses</strong>
				</div>
			</div>
			<div class="line" style="position: relative;right: 3rem;"></div>
			<div class="step" data-target="#test-lv-2" style="    position: relative;bottom: 6rem;">
				<button type="button" class="btn step-trigger">
				<span class="bs-stepper-circle"><i class="fa fa-credit-card"></i></span>
				<span class="bs-stepper-label">Transfer ke rekening</span>
				</button>
				<hr class="ln1" style="position: relative;left: 4rem;bottom: 2rem;width: 50rem;"><em style="    position: relative;left: 8%;bottom: 3rem;">Anda bisa transfer via Virtual account ke :<span id="virtual_account"></span> </em></div><div class="line"></div>
				<div class="step" data-target="#test-lv-3" style="position: relative;bottom: 7rem;"><button type="button" class="btn step-trigger"><span class="bs-stepper-circle"><i class="fa fa-clock-o"></i></span>							<span class="bs-stepper-label">Batas pembayaran</span>
				</button><hr class="ln1" style="position: relative;left: 4rem;bottom: 2rem;width: 50rem;"><em style="position: relative;left: 8%;bottom: 3rem">Segera selesaikan pembayaran zakat sebelum ()atau zakat Anda otomatis dibatalkan oleh sistem.</em>
			</div>
		</div>
		<div class="bs-stepper-content">
			<div id="test-lv-1" class="content">
				<p class="text-center">test 3</p>
				<button class="btn btn-primary" onclick="stepper3.next()">Next</button>
				<button class="btn btn-primary" onclick="stepper3.previous()">Previous</button>
			</div>
			<div id="test-lv-2" class="content">
				<p class="text-center">test 4</p>
				<button class="btn btn-primary" onclick="stepper3.next()">Next</button>
				<button class="btn btn-primary" onclick="stepper3.previous()">Previous</button>
			</div>
			<div id="test-lv-3" class="content">
				<p class="text-center">test 5</p>
				<button class="btn btn-primary" onclick="stepper3.next()">Next</button>
				<button class="btn btn-primary" onclick="stepper3.previous()">Previous</button>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
$('#btn-zakat').click(function() {
	let max=9999999999;
	let min=1111111111;
	let  dataAll = ({
	  'zakat_id':$('#jenis').val(),
	  'zakat': $('#zakat').val(),
	  'nama': $('#nama').val(),
	  'virtual_account': Math.floor(Math.random() * (max - min)) + min,
	  'email': $('#email').val(),
	  'no_hp': $('#no_hp').val(),

	  });
	$.ajax({
	  url: '/api/payment/zakat/',
	  type: "POST",
	  data:  dataAll,
	success:function(data){
		$('#virtual_account').text(dataAll.virtual_account);
		$('.detail-pembayaran').show();
		$('.identitas').hide();
	}
	});
});


</script>
@endsection
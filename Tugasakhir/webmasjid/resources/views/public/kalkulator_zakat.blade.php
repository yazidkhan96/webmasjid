@extends('master.master_main')
@section('content')
<div class="card" style="width: 34rem; margin-left: 2rem;
	margin-top: 10rem;">
	<div class="card-header">
		<div class="title-zakat" style="text-align: center;">
			<span style="position: relative;top: -5px;left: 5px;">Kalkulator zakat Maal</span>
		</div>
	</div>
	<div class="card-body">
		<label>Nilai deposito/tabungan/giro</label>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Rp</span>
			</div>
			<input type="text"  class="form-control input-number" aria-label="Username" aria-describedby="basic-addon1">
		</div>
		<label>Nilai properti dan kendaraan(investasi)</label>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Rp</span>
			</div>
			<input type="text" class="form-control input-number" aria-label="Username" aria-describedby="basic-addon1">
		</div>
		<label>Nilai Emas atau sejenisnya</label>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Rp</span>
			</div>
			<input type="text" class="form-control input-number"  aria-label="Username" aria-describedby="basic-addon1">
		</div>
		<label>Hutang pribadi yang jatuh tempo tahun ini</label>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Rp</span>
			</div>
			<input type="text" class="form-control input-number"  aria-label="Username" aria-describedby="basic-addon1">
		</div>
		<label>Saham piutang dan surat-surat berharga lainnya</label>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Rp</span>
			</div>
			<input type="text" class="form-control input-number"  aria-label="Username" aria-describedby="basic-addon1">
		</div>
	</div>
	<button class="btn btn-success show-result-mal" >Hitung Zakat</button>
</div>
<div class="col-6" id="summary-mal">
	<div class="form-summary" style="height: 96px;     width: 541px;
		position: relative;
		left: 19px;
		bottom: 34px;">
		<em style="position: relative;
		bottom: -82px;">Hasil perhitungan zakat maal anda :</em><br>
		<strong style="position: relative;
		bottom: -85px;">Rp 1.000.000</strong>
		<div class="text-right" id="action">
			<a href="{{url('/payment_zakat')}}" class="btn btn-success" id="sum" style="position: relative; bottom: -47px; color: white;">Salurkan zakat anda</a>
		</div>
		
	</div>
</div>
</div>
<script type="text/javascript">
	$('#summary-mal').hide();
	console.log('hide');
	$('.show-result-mal').click(function (){
	$('.show-result-mal').attr('disabled',true);
	$('#summary-mal').show();
	console.log('bisaaa');
	});

</script>
@endsection
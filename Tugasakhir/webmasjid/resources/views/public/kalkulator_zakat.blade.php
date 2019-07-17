@extends('master.master_main')
@section('content')
<div class="card" style="width: 34rem; margin-left: 2rem;
	margin-top: 10rem;">
	<div class="card-header" id="hide-perhitungan">
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
			<input type="text"  class="form-control input-number" id="tabungan" aria-label="Username" aria-describedby="basic-addon1" value='900000'>
		</div>
		<label>Nilai properti dan kendaraan(investasi)</label>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Rp</span>
			</div>
			<input type="text" class="form-control input-number" id="investasi" aria-label="Username" aria-describedby="basic-addon1" value='100000000'>
		</div>
		<label>Nilai Emas atau sejenisnya</label>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Rp</span>
			</div>
			<input type="text" class="form-control input-number"  id="emas" aria-label="Username" aria-describedby="basic-addon1" value='3900000'>
		</div>
		<label>Hutang pribadi yang jatuh tempo tahun ini</label>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Rp</span>
			</div>
			<input type="text" class="form-control input-number" id="hutang" aria-label="Username" aria-describedby="basic-addon1" value='1000'>
		</div>
		<label>Saham piutang dan surat-surat berharga lainnya</label>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Rp</span>
			</div>
			<input type="text" class="form-control input-number" id="saham" aria-label="Username" aria-describedby="basic-addon1" value='100000000'>
		</div>
	</div>
	<button class="btn btn-success " id="show-result-mal" >Hitung Zakat</button>
</div>
<div class="col-6" id="summary-mal">
	<div class="form-summary" style="height: 96px;     width: 541px;
		position: relative;
		left: 19px;
		bottom: 34px;">
		<em style="position: relative;
		bottom: -82px;">Hasil perhitungan zakat maal anda : <span id="total"></span></em><br>
		<strong style="position: relative;
		bottom: -85px;"></strong>
		<div class="text-right">
			<a href="{{url('/payment_zakat')}}" class="btn btn-success" id="salurkan" style="position: relative; bottom: -47px; color: white;">Salurkan zakat anda</a>
		</div>
		
	</div>
</div>
</div>
<script type="text/javascript">

	$('#show-result-mal').click(function(){
	let zakat1 = ($('#tabungan').val()||0);
	let zakat2 = ($('#investasi').val()||0);
	let zakat3 = ($('#emas').val()||0);
	let zakat4 = ($('#saham').val()||0);
	let zakat5 = ($('#hutang').val()||0);
	//let total =(parseInt(zakat1)+`+`+parseInt(zakat2)+`+`+parseInt(zakat3)+`+`+parseInt(zakat4))+`-`+parseInt(zakat5);
	let total =(parseInt(zakat1)+parseInt(zakat2)+parseInt(zakat3)+parseInt(zakat4))-parseInt(zakat5);
			console.log(total);
		if (total>=52300000) {
			let totalZakat=total*0.025;
			console.log(total,totalZakat);
			$('#total').text(totalZakat);
			$('#salurkan').attr('href',"/payment_zakat?zakat="+totalZakat);
			$('#hide-perhitungan').hide();
			$('#show-hasil').show();		
			$('#summary-mal').show();
		}
		else{
			$('#hide-perhitungan').hide();
			$('#show-hisab').show();
		}
	});
	$('#summary-mal').hide();
	/*$('.show-result-mal').click(function (){
	// $('.show-result-mal').attr('disabled',true);
	});*/

</script>
@endsection
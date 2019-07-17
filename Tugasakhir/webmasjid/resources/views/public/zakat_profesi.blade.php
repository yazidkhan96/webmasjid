@extends('master.master_main')
@section('content')
<div>
	<span class="text-zakat"><strong>ayo bayar zakat anda sekarang ! <br>
		Bersihkan harta dengan zakat yang mudan dan cepat<br>
	Kapan saja ke lembaga dan program zakat terpercaya via masjidkita.com</strong></span>
</div>
<div class="card" style="width: 34rem; margin-left: 2rem;
    margin-top: 10rem;" id="hide-perhitungan">
	<div class="card-header">
		<div class="title-zakat" style="text-align: center;">
		<span><i class="fa fa-briefcase" style="font-size: 32px; position: relative;"></i></span>
		<span style="position: relative;top: -5px;left: 5px;">Zakat Profesi</span>
		</div>
	</div>
	<div class="card-body">
		<h2 class="card-title">Hitung zakat anda sekarang !</h2>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Rp</span>
			</div>
			<input type="text" class="form-control input-number" placeholder="Pendapatan wajib perbulan(wajib di isi)" aria-label="Username" aria-describedby="basic-addon1" id="hzakatpro1">
		</div>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Rp</span>
			</div>
			<input type="text" class="form-control input-number" placeholder="Pendapatan lain(jika ada)" aria-label="Username" aria-describedby="basic-addon1" id="hzakatpro2">
		</div>
	</div>
	<a href="#" class="btn btn-success" id="btn-zakat" style="color: white ;">Hitung Zakat</a>
</div>

<div class="card" style="width: 34rem; height: 15rem; position: relative; margin-left: 2rem;margin-top: 10rem;display: none;" id="show-hisab">
	<div class="card-header">
		<div class="title-zakat" style="text-align: center;">
		<span><i class="fa fa-briefcase" style="font-size: 32px; position: relative;"></i></span>
		<span style="position: relative;top: -5px;left: 5px;">Zakat Profesi</span>
		</div>
	</div>
	<div class="card-body">
		<div>
			<span style="margin-left: 15rem;"><i class="fa fa-archive" style="font-size: 34px;"></i></span><br>	
			<span style="margin-left: 14rem;"><strong style="text-align: center;">MAAF!!!</strong></span><br>
			<span style="margin-left: 9rem;"><em>Zakat anda belum memenuhi hisab</em></span> 
		</div>
		
	</div>
	<button id="hitung-ulang" class="btn btn-success" >Hitung ulang zakat</button>
</div>



<div class="card" style="width: 41%; height: 15rem;display: none; position: relative; left: 7%;" id="show-hasil">
	<div class="card-header">
		<div class="title-zakat"  style="text-align: center;">
		<span><i class="fa fa-briefcase" style="font-size: 32px; position: relative;"></i></span>
		<span style="position: relative;top: -5px;left: 5px;">Zakat Profesi</span>
		</div>
	</div>
	<div class="card-body">
		<div style="position: relative; left: 31%;">
			<span><em>Hasil perhitungan zakat profesi anda :<span id='total'></span> </em></span> 
			<br>
			<span><em></em></span>
		</div>
		
	</div>
	<a href="{{url('/payment_zakat')}}" class="btn btn-success" style="color: white;" id="salurkan">Salurkan zakat anda</a><br>	
	<a href="#" class="btn btn-success" style="color: white;">Hitung ulang zakat</a>
</div>
<script type="text/javascript">
	$('#btn-zakat').click(function(){
	let zakat1 = ($('#hzakatpro1').val()||0);
	let zakat2 = ($('#hzakatpro2').val()||0);
	let total = (parseInt(zakat1) + parseInt(zakat2));
		if (total>=4400000) {
			let totalZakat=total*0.025;
			$('#total').text(totalZakat);
			$('#salurkan').attr('href',"/payment_zakat?zakat="+totalZakat);
			$('#hide-perhitungan').hide();
			$('#show-hasil').show();		
		}
		else{
			$('#hide-perhitungan').hide();
			$('#show-hisab').show();
					console.log(total);
		}
	});
	$('#hitung-ulang').click(function(){
		$('#show-hisab').hide();
		$('#hide-perhitungan').show();
	});
</script>

@endsection
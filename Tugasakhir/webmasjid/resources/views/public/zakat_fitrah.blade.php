@extends('master.master_main')
@section('content')
<div>
	<span class="text-zakat"><strong>ayo bayar zakat anda sekarang ! <br>
		Bersihkan harta dengan zakat yang mudan dan cepat<br>
	Kapan saja ke lembaga dan program zakat terpercaya via masjidkita.com</strong></span>
</div>
<div class="card" style="width: 34rem; margin-left: 2rem;
    margin-top: 10rem;">
	<div class="card-header">
		<div class="title-zakat" style="text-align: center;">
		<span><i class="fa fa-handshake-o" style="font-size: 32px; position: relative;"></i></span>
		<span style="position: relative;top: -5px;left: 5px;">Zakat fitrah</span>
		</div>
	</div>
	<div class="card-body">
		<h2 class="card-title">Hitung zakat anda sekarang !</h2>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Rp</span>
			</div>
			<input type="text" class="form-control input-number" id="hargaberas" placeholder="harga beras yang anda konsumsi(wajib di isi)" aria-label="Username" aria-describedby="basic-addon1">
		</div>
		<div class="input-group mb-4">
			<input type="text" class="form-control" id="jumlahorang" placeholder="Jumlah orang yang ingin berzakat" aria-label="Username" aria-describedby="basic-addon1" style="text-align: center;">
		</div>
		<div class="input-group mb-4">
			<span>Total zakat Fitrah anda :	<span id="totalzakat"></span> </span>
		</div>
	</div>
	<a href="#" class="btn btn-success" id="btnzakat" style="color: white;">Hitung Zakat</a>
 	<a href="{{url('/payment_zakat')}}" class="btn btn-success mt-2" id="salurkan" style="color: white;">Salurkan zakat</a>
</div>
<script type="text/javascript"> 
	$('#salurkan').hide();
	$('#btnzakat').click(function() {
		let zakat1 = ($('#hargaberas').val()||0);
		let zakat2 = ($('#jumlahorang').val()||0);
		let total = (parseInt(zakat1) * parseInt(zakat2));
		$('#totalzakat').text(total);
			console.log(total);
		$('#salurkan').show();
		$('#salurkan').attr('href',"/payment_zakat?zakat="+total);
	})				

</script>

@endsection
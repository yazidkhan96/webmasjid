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
			<input type="text" class="form-control input-number" placeholder="harga beras yang anda konsumsi(wajib di isi)" aria-label="Username" aria-describedby="basic-addon1">
		</div>
		<div class="input-group mb-4">
			<input type="text" class="form-control" placeholder="Jumlah orang yang ingin berzakat" aria-label="Username" aria-describedby="basic-addon1" style="text-align: center;">
		</div>
	</div>
	<a href="#" class="btn btn-success" style="color: white;">Hitung Zakat</a>
</div>
</div>

@endsection
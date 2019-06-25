@extends('master.master_main')
@section('content')
<div>
	<span class="text-zakat"><strong>ayo bayar zakat anda sekarang ! <br>
		Bersihkan harta dengan zakat yang mudan dan cepat<br>
	Kapan saja ke lembaga dan program zakat terpercaya via masjidkita.com</strong></span>
</div>
<div class="card" style="width: 34rem; margin-left: 2rem;
    margin-top: 4rem;">
	<div class="card-header">
		<div class="title-zakat" style="text-align: center;">
		<span><i class="fa fa-balance-scale" style="font-size: 	2.3rem;"></i></span>
		<span style="position: relative;top: -5px;left: 5px;">Zakat maal</span>
		</div>
	</div>
	<div class="card-body">
		<h4 class="card-title" style="text-align: center;">Hitung zakat anda sekarang !</h4>
		<span><i class="fa fa-calculator" style="font-size: 52px; margin-left: 13rem;"></i></span><br> <br>
		<span><strong style="text-align: center;">Zakat maal khusus harta yang telah tersimpan selama lebih dari 1 tahun (haul) dan telah mencapai batas tertentu (nisab)</strong></span>
	</div>
	<a href="{{url('/kalkulator_zakat')}}" class="btn btn-primary">kalkulator zakat maal</a>
</div>
</div>

@endsection
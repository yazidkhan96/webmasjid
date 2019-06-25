@extends('master.master_main')
@section('content')
<div class="card" style="width: 41%;position: absolute;left: 27%;top: 181px;">
	<div class="card-body">
		<h5 class="card-title" style="position: relative;left: 29%;">Intruksi pembayaran</h5>
		<p class="card-text" style="text-align: center;">Transfer tepat sesuai nominal berikut.</p>
		<span style="font-weight: bold; font-size: 27px; position: relative; left: 27%; bottom: 13px;">RP.<strong>;</strong></span>
		<div class="alert alert-primary" style="width: 415px; position: relative;left: 10%; bottom: 11%; background-color: #fff70033; border-color: #fff70033; "><strong style="font-size: 14px; ">PENTING! Transfer hingga 3 digit terakhir agar Donasi Anda dapat diproses</strong>
		</div>
		<div class="col small-padding">
			<div class="col col--m6" >
				<span style="font-weight: bold;margin-left: 22px;">Jumlah donasi</span>
			</div>
			<div class="col col--m6">
				<span style="font-weight: bold;position: relative;left: 94%;bottom: 31px;">;</span>
			</div>
		</div>
		<div class="col small-padding">
			<div class="col col--m6" >
				<span style="font-weight: bold;margin-left: 22px;">Kode unik*</span>
			</div>
			<div class="col col--m6">
				<span style="font-weight: bold;position: relative;left: 94%;bottom: 31px;">;</span>
			</div>
		</div>
	</div>
</div>
<div class="card" style="width: 41%;height: 200px;position: relative;left: 27%;top: 499PX;">
	<div class="card-body">
		<span>
			<p>Transfer ke rekening atas nama <strong>Yayasan Masjid Indonesia</strong>   Berikut ini:</p>
		</span>
		<div class="card" style="width: 81%; height: 31px; position: relative; left: 9%;">
			<strong>4988 00 8999</strong><em style="position: relative;left: 87%;bottom: 22px; width: 16%;">BCA</em>
		</div>
		
	</div>
</div>
	<div class="alert alert-primary" style="width: 30%;position: relative;left: 32%;
    top: 405px; background: #fcfcfc; "><strong style="font-size: 14px; ">Transfer sebelum 11 Jun 2019 10:00 WIB atau donasi Anda otomatis dibatalkan oleh sistem.</strong>
	</div>
@endsection
@extends('master.master_main')
@section('content')
<div class="card" style="width: 34rem; margin-left: 2rem;
	margin-top: 10rem;" id="hide-perhitungan">
	<div class="card-header">
		<div class="title-zakat" style="text-align: center;">
			<span><i class="fa fa-address-card" style="font-size: 32px; position: relative;"></i></span>
			<span style="position: relative;top: -5px;left: 5px;">Identitas</span>
		</div>
	</div>
	<div class="card-body">
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Nama</span>
			</div>
			<input type="text" class="form-control"  aria-label="Username" aria-describedby="basic-addon1" id="hzakatpro1">
		</div>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Email</span>
			</div>
			<input type="Email" class="form-control" aria-label="Username" aria-describedby="basic-addon1">
		</div>
		<div class="input-group mb-4">
			<div class="input-group-prepend">
				<span class="input-group-text" id="basic-addon1">Nomor handphone</span>
			</div>
			<input type="text" class="form-control input-number" aria-label="Username" aria-describedby="basic-addon1">
		</div>
	</div>
	<a href="#" class="btn btn-primary" id="btn-zakat">Lanjut Ke pembayaran</a>
</div>
<div class="card" style="width: 37%; height: 385px; position: relative; margin-left: 2rem;margin-top: 10rem;" >
	<div class="card-header">
		<div class="title-zakat" style="text-align: center;">
			<span><i class="fa fa-credit-card" style="font-size: 32px; position: relative;"></i></span>
			<span style="position: relative;top: -5px;left: 5px;">Pembayaran</span>
		</div>
	</div>
	<div class="card-body">
		<h3 style="position: relative; bottom: 1rem;">Metode Pembayaran</h3>
	<div id="accordion">
	  	<div class="card">
		    <div class="card-header" id="headingOne" style="background-color: white !important;">
		      <h5 class="mb-0">
		        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		         <input type="radio" name="">Transfer Bank
		        </button>
		      </h5>
		    </div>
	   </div>
  	</div>
		<div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
		      <div class="card-body">
		        <form>
					<div class="radio">
						<input type="radio" name="bank" value="bni"><img src="{{asset('/img/Bni.png')}}" style="width: 49px; position: relative; left: 3px; bottom: 2px;">
					</div>
					<div class="radio">
						<input type="radio" name="bank" value="bca"><img src="{{asset('/img/bca.jpg')}}" style="width: 49px; position: relative; left: 1px; bottom: 5px;">
					</div>
					<div class="radio">
						<input type="radio" name="bank" value="bri"><img src="{{asset('/img/bri.png')}}" style="width: 49px; position: relative; left: 4px; bottom: 2px;">
					</div>
					<div class="radio">
						<input type="radio" name="bank" value="mandiri"><img src="{{asset('/img/mandiri.jpg')}}" style="width: 49px; position: relative; left: 1px; bottom: 5px;">
					</div>
				</form>
			</div>
		</div>
			<div id="accordion">
		  <div class="card">
		    <div class="card-header" id="headingTwo" style="background-color: white !important;">
		      <h5 class="mb-0">
		        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
		         <input type="radio" name="">Virtual Account
		        </button>
		      </h5>
		    </div>
		   </div>
		  </div>
		    <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordion">
		      <div class="card-body">
		        <form>
					<div class="radio">
						<input type="radio" name="bank" value="bni"><img src="{{asset('/img/Bni.png')}}" style="width: 49px; position: relative; left: 3px; bottom: 2px;">
					</div>
					<div class="radio">
						<input type="radio" name="bank" value="bca"><img src="{{asset('/img/bca.jpg')}}" style="width: 49px; position: relative; left: 1px; bottom: 5px;">
					</div>
					<div class="radio">
						<input type="radio" name="bank" value="bri"><img src="{{asset('/img/bri.png')}}" style="width: 49px; position: relative; left: 4px; bottom: 2px;">
					</div>
					<div class="radio">
						<input type="radio" name="bank" value="mandiri"><img src="{{asset('/img/mandiri.jpg')}}" style="width: 49px; position: relative; left: 1px; bottom: 5px;">
					</div>
				</div>
		      </div>
			</form>
   		
   		
		<span><a href="{{url('/detail_perencanaan_pelatihan')}}" class="btn-more btn btn-primary" role="button" style="color: white !important; position: absolute; left: 14%;
					top: 313px; padding: 1px 81px;">Selesaikan pembayaran&raquo;</a></span>
	</div>
</div>
<div class="col-md-12 mt-5" style="    position: relative;
	top: 5rem;">
	<div id="stepper3" class="bs-stepper vertical">
		<div class="bs-stepper-header">
			<div class="step" data-target="#test-lv-1">
				<button type="button" class="btn step-trigger">
				<span class="bs-stepper-circle">Rp</span>
				<span class="bs-stepper-label">Detail zakat</span>
				</button>
				<hr class="ln1" style="position: relative;
				left: 4rem;
				bottom: 2rem;
				width: 50rem;">
				<strong style="position: relative;
				left: 46rem;
				bottom: 2rem;
				}">Rp 100.0000.123</strong>
				<div class="alert alert-primary" style="width: 322px; position: relative;
					left: 69%; bottom: 11%;">
					<strong style="font-size: 14px; ">PENTING! Transfer hingga 3 digit terakhir agar zakat Anda dapat diproses</strong>
				</div>
			</div>
			<div class="line" style="    position: relative;
			right: 3rem;"></div>
			<div class="step" data-target="#test-lv-2" style="    position: relative;
				bottom: 6rem;
				}">
				<button type="button" class="btn step-trigger">
				<span class="bs-stepper-circle"><i class="fa fa-credit-card"></i></span>
				<span class="bs-stepper-label">Transfer ke rekening</span>
				</button>
				<hr class="ln1" style="    position: relative;
				left: 4rem;
				bottom: 2rem;
				width: 50rem;">
				<em style="    position: relative;
				left: 8%;
				bottom: 3rem;
				}">Anda bisa transfer via apapun (m-banking, atm dll) ke</em>
			</div>
			<div class="line"></div>
			<div class="step" data-target="#test-lv-3" style="    position: relative;
				bottom: 7rem;">
				<button type="button" class="btn step-trigger">
				<span class="bs-stepper-circle"><i class="fa fa-clock-o"></i></span>
				<span class="bs-stepper-label">Batas pembayaran</span>
				</button>
				<hr class="ln1" style="position: relative;
				left: 4rem;
				bottom: 2rem;
				width: 50rem;">
				<em style="position: relative;
				left: 8%;
				bottom: 3rem">Segera selesaikan pembayaran zakat sebelum ()atau zakat Anda otomatis dibatalkan oleh sistem.</em>
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
@endsection
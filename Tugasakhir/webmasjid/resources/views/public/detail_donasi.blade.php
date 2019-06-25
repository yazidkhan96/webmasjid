@extends('master.master_main')
@section('content')

<div class="container">
	<h2 style="position: relative; top: 29px; left: 8.5%;">Pembangunan masjid Al hasanah</h2>
	<div class="row" style="position: relative;top:48px;left: 8%; width: 675px;">
		<div class="col" style="min-height: 357.188px;">
			<img src="{{asset('/img/msj1.jpg')}}" class="border" alt="..." style="width:664px;height: 357px;">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		</div>		
	</div>
	<div class="col">
			<h2 style="position: relative;left: 66%;bottom: 472px;">Rp .</h2>
			<strong style="position: relative;left: 66%;bottom: 466px;">Terkumpul dari target Rp ;</strong>
		</div>
			<a href="{{url('/payment_donasi')}}" class="btn btn-danger" role="button" aria-pressed="true" style="    position: relative;left: 66%;bottom: 443px;padding: 7px 93px;">Donasi sekarang</a>

</div>
	<div class="detail-donasi">
		<h4 align="center">Detail</h4>
		<hr style="width: 100%;border-width: 7px;border-style: inset;">
		<div style="width: 50%; position: relative; left: 25%;">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.


			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</div>



	</div>









@endsection
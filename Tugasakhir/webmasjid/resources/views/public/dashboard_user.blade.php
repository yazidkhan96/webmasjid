@extends('master.master_main')
@section('content')


 @php($user=Auth::user())
<div class="card" style="width: 18rem; background-color: rgba(48,173,76,1);position: relative;
	top: 9rem;left: 5rem;">
	<img class="card-img-top rounded-circle" src="{{asset('images/User')}}/{{$user->gambar}}" alt="Card image cap" style="height: 70px;width: 70px; position: relative; top: 20px; left: 33%; z-index: 1; border: 5px solid #fff;">
	<div class="card-body">
		<h5 class="card-title" style="margin-left: 4rem; color: white;">{{$user->name}}</h5>
	</div>
	<ul class="list-group list-group-flush">
		<li class="list-group-item">
			<div class="container dashboard">
				<a data-toggle="collapse" data-target="#demo" style="margin-left: -27px;">Akun saya</a><br>
				<div id="demo" class="collapse" style="margin-left: -15px;">
					<ul style="list-style-type:none;" class="list-group list-group-flush">
						<li><a href="{{url('/ubah_password')}}">Ubah password</a></li>
						<li><a href="{{url('/ubah_foto')}}">Ubah foto profil</a></li>
					</ul>
				</div>
			</div>
		</li>
		<li class="list-group-item"><a href="{{url('/galang/dana')}}" style="color: black; text-decoration: none;">Galang Dana</a>
		</li>
		<li class="list-group-item">Pencairan dana</li>
	</ul>
</div>
									
		<div class="dashboard-pencairan-dana">
				<h4 style="position: relative; bottom: 11rem; left: 388px; margin-top: 2rem; cursor: pointer;">Pencairan dana</h4>
			<hr style="border: 1px solid grey;width: 59%;position: relative;left: 7rem;bottom: 183px;">

			<em style="position: relative;left: 29%;bottom: 181px;">Saldo : {{$user->galangdana->sum('biaya_yang_terkumpul')}};</span></em>

			<input class="form-control" type="text" id="jumlahpencairan" placeholder="Jumlah pencairan dana" style="position: relative;left: 42%;bottom: 157px; width: 620px; text-align: center;">
			<em style="position: relative;left: 29%;bottom: 187px;">Jumlah pencairan dana</em>
			<select class="form-control" id="banktujuan" style="position: relative;left: 42%;bottom: 157px; width: 620px;">
  					<option>BNI</option>
  					<option>BRI</option>
  					<option>BCA</option>
  					<option>Muamalat</option>
			</select>
			<em style="position: relative;left: 29%;bottom: 187px;">Bank tujuan</em>

			<input class="form-control" type="text" id="namarekening" style="position: relative;left: 42%;bottom: 157px; width: 620px; text-align: center;">
			<em style="position: relative;left: 29%;bottom: 187px;">Nama pemilik rekening</em>
			<input class="form-control" type="text"  id="nomorrekening" style="position: relative;left: 42%;bottom: 157px; width: 620px; text-align: center;">
			<em style="position: relative;left: 29%;bottom: 187px;">Nomor rekening</em>
			<input class="form-control" type="text"  id="email" style="position: relative;left: 42%;bottom: 157px; width: 620px; text-align: center;">
			<em style="position: relative;left: 29%;bottom: 187px;">Email</em>

			<button class="btn btn-primary btn-lg" id="save"style="margin-left: 55rem;padding: 5px 60px;position: relative; bottom: 136px;">Cairkan</button>
		</div>
<script type="text/javascript">
	var dataAll = [];

$('#save').on('click',function () {
	dataAll = ({
		'username' : '{{$user->id}}',
		'email' : $('#email').val(),
		'jumlahpencairan': $('#jumlahpencairan').val(),
		'banktujuan': $('#banktujuan').val(),
		'namarekening': $('#namarekening').val(),
		'nomorrekening': $('#nomorrekening').val(),

	})

	console.log(dataAll);
	$.ajax({
		url: "/api/add/penarikan/dana",
		type: "POST",
		data:  dataAll,
		success:function(data){
		location.href="/dashboard_user";
		console.log(data);
	  }
	});
});

</script>
@endsection
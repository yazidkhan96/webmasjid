@extends('master.master_main')
@section('content')

 @php($user=Auth::user())
<div class="card" style="width: 18rem; background-color: rgba(48,173,76,1);position: relative;
	top: 8rem;left: 5rem;">
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
		<li class="list-group-item"><a href="{{url('/dashboard_user')}}" style="color: black; text-decoration: none;">Pencairan dana</a></li>
	</ul>
</div>
@if ($message = Session::get('error'))
<div class="alert alert-danger alert-block">
    <button type="button" class="close" data-dismiss="alert">×</button> 
    <strong style="position: relative; bottom: 15rem;">{{ $message }}</strong>
</div>
@endif
<form action="{{url('/update/password')}}" method="post">
	{{csrf_field()}}
	<div class="container" id="formApp">
		<h3 style="position: fixed; bottom: 28rem; left: 382px;">Ubah Password</h3>
		<hr style="border: 1px solid grey;width: 59%;position: fixed;left: 24rem;bottom: 27rem;">
			<div class="form-group" style="position: fixed;left: 386px;bottom: 22rem;">
					Password lama :<input type="password" class="form-control " name="old" required="" style="    width: 600px;position: relative;bottom: 25px;left: 121px;">
				</div>
		<div class="form-group" style="position: fixed;left: 386px;bottom: 18rem;">
			Password baru : 
			<input type="password" class="form-control" required="" id="pass" style="width: 600px; position:relative;bottom: 25px; left: 121px;" name='new'>
		</div>
		<div class="form-group" style="position: fixed;left: 386px;bottom: 14rem;">
			Konfirmasi Password : <input type="password" class="form-control" id="repass" required="" style="width: 600px; position:relative;bottom: 25px; left: 160px;" name="repass">
		</div>
		<button class="btn btn-primary btn-lg" id="save" style="position: fixed;left: 77%; bottom: 12rem;">Simpan</button>
	</div>
</form>
<!-- <PISAH> -->
	<script type="text/javascript">
	$('#formApp').on('click change keyup',function () {
		$('#pass,#repass').removeClass('form-error');
		$('#save').removeClass('disabled');
		if($('#pass').val() != $('#repass').val() || $('#pass').val().length <6 || $('#repass').val().length <6){
			$('#pass,#repass').addClass('form-error');
			$('#save').addClass('disabled');
		}
	});
</script>

@endsection
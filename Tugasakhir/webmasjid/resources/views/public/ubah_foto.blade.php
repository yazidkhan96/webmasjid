@extends('master.master_main')
@section('content')


@php($user=Auth::user())
<div class="card" style="width: 18rem; background-color: rgba(48,173,76,1);position: relative;
	top: 8rem;left: 5rem;">
	<img class="card-img-top rounded-circle" src="{{asset('/img/user-profile.jpg')}}" alt="Card image cap" style="height: 70px;width: 70px; position: relative; top: 20px; left: 33%; z-index: 1; border: 5px solid #fff;">
	<div class="card-body">
		<h5 class="card-title" style="margin-left: 4rem; color: white;">username</h5>
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
<div class="dashboard-foto-profile">
		<h4 style="position: relative; bottom: 11rem; left: 404px;">Edit foto profile</h4>
		<hr style="border: 1px solid grey;width: 59%;position: relative;left: 8rem;bottom: 12rem;">
		<div class="row m-0 mb-3">
     <div class="col p-0 pt-2 font-14 text-bold" style="position: relative;left: 27rem;bottom: 12rem;">Gambar</div>


     <div class="col pr-0">
      <div class="d-inline-block text-center">

        <input name="image" type="file" accept="image/*" onchange="uploadimage(event)" id="imginput" class="hidden" />
        <img id="imgview" src="{{asset('images/User')}}/{{$user->gambar}}" class="admin-view-sampul"/ style="position: fixed;left: 31rem;bottom: 228px;width: 338px;object-fit: cover;"><br>

        <label class="mt-2 btn-change text-center" for="imginput">
          <span class="btn border" style="position: fixed;bottom: 11rem;left: 38rem;">Pilih Gambar</span>
        </label>
      </div>
    </div>


  </div>
		<span style="position: relative; left: 33rem; bottom: -6px;">
					<em>Foto yang di Upload disarankan</em><br>
					<em>Berukuran 72px x 75px</em><br>
					<em>dan memiliki format PNG,JPG atau Jpeg</em>
		</span>
</div>
<button class="btn btn-primary btn-lg" id="save" style="margin-left: 33rem;padding: 5px 60px;position: relative; bottom: -1rem;">Simpan</button>


<script type="text/javascript">
var dataAll = [];
$('#save').click(function () {
  dataAll = ({
    'gambar': file_imginput,
  })
  console.log(file_imginput);
    // statusForm = variabel terdapat di main.js

      $('#save').addClass('disabled');
       $.ajax({
      url: '/api/update/user/'+'{{$user->id}}', 
      type: "POST",
      data:  dataAll, 
      success:function(data){
        location.href="/ubah_foto";
        console.log(data);
      }
    });

  });
</script>
@endsection
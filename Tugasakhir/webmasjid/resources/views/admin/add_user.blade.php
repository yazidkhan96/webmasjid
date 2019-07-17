@extends('master.master_admin')
@section('content')
<div id="formAdd">
	<div class="title-admin">Tambah Data Pengurus</div>
	<div class="content-admin">
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Username</div>
      <div class="col pr-0">
        <input type="" name="" id="Username" placeholder="Username" class="form-control" style="max-width: 25rem">
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Email</div>
      <div class="col pr-0">
        <input type="email" name="" id="Email" placeholder="Email" class="form-control" style="max-width: 25rem">
      </div>
    </div>
     <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">No Hp/WA</div>
      <div class="col pr-0">
        <input type="text" name="" id="Nohp" placeholder="Nohp" class="form-control input-number" style="max-width: 25rem">
      </div>
    </div>

    <div class="row m-0 mb-3">
     <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Gambar</div>
     <div class="col pr-0">
      <div class="d-inline-block text-center">
        <input name="image" type="file" accept="image/*" onchange="uploadimage(event)" id="imginput" class="hidden" />
        <img id="imgview" src="{{asset('img/sampul.jpg')}}" class="admin-view-sampul"/><br>
        <label class="mt-2 btn-change text-center" for="imginput">
          <span class="btn border">Pilih Gambar</span>
        </label>
      </div>
    </div>
  </div>


     <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Password</div>
      <div class="col pr-0">
        <input type="Password" name="" id="Password" placeholder="Password" class="form-control" style="max-width: 25rem">
      </div>
    </div>
     <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Konfirmasi Password</div>
      <div class="col pr-0">
        <input type="Password" name="" id="konfirmasiPassword" placeholder="Password" class="form-control" style="max-width: 25rem">
      </div>
    </div>
  
  
<div class="text-right mb-5">
 <button class="btn btn-app btn-user" id="save">Tambah Data Pengurus</button>
</div>
</div>
</div>
<script type="text/javascript">
 var dataAll = [];
 var tmp=[];
 $('#slider').addClass('active');
$('#save').click(function () {
   $('.thumbnail-img').each(function (argument) {
    var img = $(this).attr('src');
    fileImg.push(img);
  });
  tmp.push(file_imginput);


  dataAll = ({
    'username': $('#Username').val(),
    'email': $('#Email').val(),
    'nohp': $('#Nohp').val(),
    'gambar': tmp,
    'password': $('#Password').val(),
    'konfirmasiPassword': $('#konfirmasiPassword').val()

  })
    // statusForm = variabel terdapat di main.js
    if(!tmp){
    alert('Gambar Tidak Ada');
    }
    else{
      $('#save').addClass('disabled');
      console.log(dataAll);
       $.ajax({
      url: "/api/admin/add/user",
      type: "POST",
      data:  dataAll, 
      success:function(data){
        location.href="/admin/user";
        console.log(data);
      }
    });
    }

  });
</script>
@endsection
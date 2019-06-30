@extends('master.master_admin')
@section('content')
<div id="formAdd">
	<div class="title-admin">Tambah Slider</div>
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
 <button class="btn btn-app btn-user" id="save">Simpan</button>
</div>
</div>
</div>
<script type="text/javascript">
 var dataAll = [];
 var tmp=[];
 $('#slider').addClass('active');
$('#save').click(function () {
  dataAll = ({
    'username': $('#Username').val(),
    'email': $('#Email').val(),
    'nohp': $('#Nohp').val(),
    'password': $('#Password').val(),
    'konfirmasiPassword': $('#konfirmasiPassword').val()

  })
    // statusForm = variabel terdapat di main.js
    if(!konfirmasiPassword){
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
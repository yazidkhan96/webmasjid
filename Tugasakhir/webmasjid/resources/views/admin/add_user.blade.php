@extends('master.master_admin')
@section('content')
<div id="formAdd">
	<div class="title-admin">Tambah Slider</div>
	<div class="content-admin">
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Username</div>
      <div class="col pr-0">
        <input type="" name="" id="judul" placeholder="Username" class="form-control" style="max-width: 25rem">
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama Masjid</div>
      <div class="col pr-0">
        <input type="" name="" id="judul" placeholder="Nama Masjid" class="form-control" style="max-width: 25rem">
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Alamat Masjid</div>
      <div class="col pr-0">
        <input type="" name="" id="Alamat" placeholder="Alamat Masjid" class="form-control" style="max-width: 25rem">
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
  
  
<div class="text-right mb-5">
 <button class="btn btn-app btn-user" id="save">Simpan</button>
</div>
</div>
</div>
<script type="text/javascript">
 var dataAll = [];
 var tmp=[];
 $('#slider').addClass('active');
 $('#desc').summernote();
$('#save').click(function () {
  $('.thumbnail-img').each(function (argument) {
    var img = $(this).attr('src');
    fileImg.push(img);
  });
  tmp.push(file_imginput);
  dataAll = ({
    'judul': $('#judul').val(),
    'gambar': tmp,
    'deskripsi':$('#desc').summernote('code')
  })
    // statusForm = variabel terdapat di main.js
    if(statusForm == 0){
      alert('lengkapi Data');
    }
    else{
      $('#save').addClass('disabled');
      console.log(dataAll);
       $.ajax({
      url: "/api/admin/create/slider",
      type: "POST",
      data:  dataAll, 
      success:function(data){
        location.href="/admin/slider";
        console.log(data);
      }
    });
    }

  });
</script>
@endsection
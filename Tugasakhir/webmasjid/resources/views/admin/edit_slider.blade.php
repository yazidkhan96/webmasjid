@extends('master.master_admin')
@section('content')
<div id="formAdd">
	<div class="title-admin">Ubah Slider</div>
	<div class="content-admin">
		<div class="row m-0 mb-3">
			<div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Judul Slider</div>
			<div class="col pr-0">
				<input type="" name="" value="{{$slider->judul}}" id="judul" placeholder="Nama Slider" class="form-control" style="max-width: 25rem">
			</div>
		</div>
   <div class="row m-0 mb-3">
     <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Gambar</div>
     <div class="col pr-0">
      <div class="d-inline-block text-center">
        <input name="image" type="file" accept="image/*" onchange="uploadimage(event)" id="imginput" class="hidden" />
        <img id="imgview" src="{{asset('images/Slider')}}/{{$slider->gambar}}" class="admin-view-sampul"/><br>
        <label class="mt-2 btn-change text-center" for="imginput">
          <span class="btn border">Pilih Gambar</span>
        </label>
      </div>
    </div>  
  </div>
  <div class="row m-0 mb-3">
   <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Deskripsi</div>
   <div class="col pr-0">
    <div id="desc"></div>
  </div>
</div>
<div class="text-right mb-5">
 <button class="btn btn-app" id="save">Simpan</button>
</div>
</div>
</div>
<script type="text/javascript">
   $('#desc').summernote('code','{!!$slider->deskripsi!!}');
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

      $('#save').addClass('disabled');
       $.ajax({
      url: '/api/admin/update/slider/'+'{{$slider->id}}',
      type: "POST",
      data:  dataAll, 
      success:function(data){
        location.href="/admin/slider";
        console.log(data);
      }
    });

  });
</script>
@endsection
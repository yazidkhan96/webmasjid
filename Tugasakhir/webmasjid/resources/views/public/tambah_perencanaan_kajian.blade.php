@extends('master.master_main')
@section('content')
<div id="formAdd">
  <div class="title-admin">Perencanaan Pelatihan</div>
  <div class="content-admin">


    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama pengurus</div>
      <div class="col pr-0">
        <select class="form-control" id="userpengurus"  style="max-width: 25rem" >
          <option hidden="">Pilih Pengurus</option>
          @foreach(App\User::all() as $user)
          <option value="{{$user->id}}">{{$user->name}}</option>
          @endforeach
        </select>
      </div>
    </div>
    
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Jenis perencanaan</div>
      <div class="col pr-0">
        <select class="form-control" id="jenisperencanaan"  style="max-width: 25rem">
          <option hidden="">Pilih Jenis Perencanaan</option>
          <option>Kajian</option>
          <option >Pelatihan</option>
        </select>
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Tanggal pelaksaan</div>
      
      <div class="col pr-0">
        <input id="datepicker" style="max-width: 25rem;">
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Lokasi pelatihan</div>
      
      <div class="col pr-0">
        <input type="" name="" id="lokasi" placeholder="Lokasi kajian" class="form-control" style="max-width: 25rem">
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">No Handphone</div>
      
      <div class="col pr-0">
        <input type="" name="" id="Nohp" placeholder="No Handphone" class="form-control" style="max-width: 25rem">
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Judul Perencanaan  </div>
      <div class="col pr-0">
        <input type="" name="" id="judul" placeholder="Judul Perencanaan" class="form-control" style="max-width: 25rem">
      </div>
      
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama ustadz/pemateri</div>
      
      <div class="col pr-0">
        <input type="" name="" id="namaustadz" placeholder="Pemateri yang akan di undang" class="form-control" style="max-width: 25rem">
      </div>
    </div>
  </div>
  <div class="row m-0 mb-3">
    <div class="col p-0 pt-2 font-14 text-bold ml-3" style="max-width: 14rem">Biaya pelaksaan(tiket pesawat,hotel,dll)</div>
    <div class="col pr-0">
      <div id="desc"></div>
    </div>
  </div>
      <div class="text-right mb-5">
        <button class="btn btn-app" id="save">Tambah Perencanaan Pelatihan</button>
      </div>
</div>
<script type="text/javascript">
var dataAll = [];
$('#budaya').addClass('active');
$('#desc').summernote();
$('#datepicker').datepicker();
// statusForm = variabel terdapat di main.js

$('#save').on('click',function () {
dataAll = ({
'user': $('#userpengurus').val(),
'jenisperencanaan': $('#jenisperencanaan').val(),
'Tanggalpelaksanaan': $('#datepicker').val(),
'lokasikajian': $('#lokasi').val(),
'nomorhandphone': $('#Nohp').val(),
'namaustadz': $('#namaustadz ').val(),
'judulperencanaan': $('#judul').val(),
'deskripsi':$('#desc').summernote('code'),
});
  console.log(dataAll);
  $.ajax({
  url: "/api/admin/upload/perencanaan/pelatihan",
  type: "POST",
  data:  dataAll,
  success:function(data){
  location.href="/perencanaan_kajian";
  console.log(data);
  }
  });
});

      $('#datepicker').datepicker({
                  uiLibrary: 'bootstrap'
              });
      </script>
</script>
@endsection
@extends('master.master_main')
@section('content')

  <div class="title-admin">Perencanaan Kajian</div>
  <div class="content-admin">
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama</div>
      <div class="col pr-0">
       <input type="" name="" id="nama" placeholder="Nama anda" class="form-control" style="max-width: 25rem">
      </div>
    </div>
    
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Judul pelatihan</div>
      <div class="col pr-0">
        <select class="form-control" id="jenisrequest"  style="max-width: 25rem">
          <option hidden="">Pilih pelatihan</option>
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
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Lokasi</div>
      
      <div class="col pr-0">
        <input type="" name="" id="lokasi" placeholder="Lokasi kajian" class="form-control" style="max-width: 25rem">
      </div>
    </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">No Handphone</div>
      
      <div class="col pr-0">
        <input type="" name="" id="nohp" placeholder="No Handphone" class="form-control" style="max-width: 25rem">
      </div>
    </div>

     <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Email</div>
      
      <div class="col pr-0">
        <input type="Email" name="" id="email" placeholder="Email" class="form-control" style="max-width: 25rem">
      </div>
    </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama pemateri</div>
      <div class="col pr-0">
        <input type="" name="" id="namapemateri" placeholder="Pemateri yang akan di undang" class="form-control" style="max-width: 25rem">
      </div>
    </div>

  <div class="row m-0 mb-3">
    <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">deskripsi</div>
   <div class="col pr-0">
    <textarea rows="5" cols="50" id="deskripsi">Judul Pelatihan :
Waktu pelatihan :
Dll :
      </textarea>
  </div>
</div>
      <div class="text-right mb-5">
        <button class="btn btn-app" id="save" style="position: absolute;right: 66%;">Tambah Perencanaan Kajian</button>
      </div>
</div>

<script type="text/javascript">
var dataAll = [];
$('#datepicker').datepicker();
// statusForm = variabel terdapat di main.js

$('#save').on('click',function () {
dataAll = ({
    'namaanda': $('#nama').val(),
      'nohp': $('#nohp').val(),
      'lokasi': $('#lokasi').val(),
      'jenisrequest': $('#jenisrequest').val(),
      'tanggalpelaksanaan': $('#datepicker').val(),
      'namapemateri': $('#namapemateri').val(),
      'Email': $('#email').val(),
      'deskripsi': $('#deskripsi').val(),
    })
  console.log(dataAll);
  $.ajax({
  url: "/api/add/request/pelatihan",
  type: "POST",
  data:  dataAll,
  success:function(data){
  location.href="/request_pelatihan";
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
 
    

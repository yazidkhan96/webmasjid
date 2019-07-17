@extends('master.master_admin')
@section('content')
<div id="formAdd">
  <div class="title-admin">Ubah Perencanaan Pelatihan</div>
  <div class="content-admin">


    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama pengurus</div>
      <div class="col pr-0">
        <select class="form-control" id="user_id"  style="max-width: 25rem" >
          <option hidden value="{{$perencanaanpelatihan->user_id}}">{{$perencanaanpelatihan->user->name}}</option>
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
          <option hidden>{{$perencanaanpelatihan->jenis_perencanaan}}</option>
          <option>Kajian</option>
          <option >Pelatihan</option>
        </select>
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Tanggal pelaksaan</div>
      
      <div class="col pr-0">
       <input id="datepicker" style="max-width: 25rem;" value="{{$perencanaanpelatihan->tanggal_pelaksanaan}}">
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Lokasi Kajian</div>
      
      <div class="col pr-0">
        <input type="" name="" value="{{$perencanaanpelatihan->lokasi}}" id="lokasi" placeholder="Lokasi kajian" class="form-control" style="max-width: 25rem">
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">No Handphone</div>
      
      <div class="col pr-0">
        <input type="" name="" value="{{$perencanaanpelatihan->nohp}}" id="Nohp" placeholder="No Handphone" class="form-control" style="max-width: 25rem">
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Judul Perencanaan  </div>
      <div class="col pr-0">
        <input type="" name="" value="{{$perencanaanpelatihan->judul_perencanaan}}" id="judul" placeholder="Judul Perencanaan" class="form-control" style="max-width: 25rem">
      </div>
      
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama ustadz</div>
      
      <div class="col pr-0">
        <input type="" name="" value="{{$perencanaanpelatihan->ustadz}}" id="namaustadz" placeholder="Pemateri yang akan di undang" class="form-control" style="max-width: 25rem">
      </div>
    </div>
  </div>
  <div class="row m-0 mb-3">
    <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Biaya pelaksaan(tiket pesawat,hotel,dll)</div>
    <div class="col pr-0">
      <div id="desc"></div>
    </div>
  </div>
      <div class="text-right mb-5">
        <button class="btn btn-app" id="save">Ubah Perencanaan Pelatihan</button>
      </div>
</div>
<script type="text/javascript">
$('#desc').summernote('code','{!!$perencanaanpelatihan->biaya_pelaksanaan!!}');
var dataAll = [];
$('#budaya').addClass('active');
$('#datepicker').datepicker();
$('#desc').summernote();


// statusForm = variabel terdapat di main.js

$('#save').on('click',function () {
dataAll = ({
'user': $('#user_id').val(),
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
  url: '/api/admin/update/perencanaan/pelatihan/'+'{{$perencanaanpelatihan->id}}',
  type: "POST",
  data:  dataAll,
  success:function(data){
  location.href="/admin/perencanaan_kajian";
  console.log(data);
  }
  });
});
</script>
@endsection 

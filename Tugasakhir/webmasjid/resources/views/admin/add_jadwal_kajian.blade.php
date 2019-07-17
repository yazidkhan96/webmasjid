@extends('master.master_admin')
@section('content')
<div id="formAdd">
	<div class="title-admin">Tambah Jadwal kajian</div>
	<div class="content-admin">
		<div class="row m-0 mb-3">
			<div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Tema kajian</div>
      

			<div class="col pr-0">
				<input type="" name="" id="tema" placeholder="Tema kajian" class="form-control" style="max-width: 25rem">
			</div>
		</div>


    <div class="row m-0 mb-3">

      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama masjid</div>
            <div class="col pr-0">
              <select class="form-control" id="namamasjid"  style="max-width: 25rem"> 
              <option hidden="">Pilih masjid</option>
              @foreach(App\Masjid::all() as $masjid)
              <option value="{{$masjid->id}}">{{$masjid->nama_masjid}}</option>
              @endforeach
            </select>
          </div>  
      </div>
      

    </div>
      <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama Ustadz</div>
      
      <div class="col pr-0">
        <input type="" name="" id="namaustadz" placeholder="Nama Ustadz" class="form-control" style="max-width: 25rem">
      </div>
    </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Tanggal Kajian</div>
      
      <div class="col pr-0">
       <input id="datepicker" style="max-width: 25rem;">
      </div>
    </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Bulan Kajian</div>
      
      <div class="col pr-0">
        <input type="" name="" id="bulankajian" placeholder="Bulan Kajian" class="form-control" style="max-width: 25rem">
      </div>
    </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Waktu Kajian</div>
      
      <div class="col pr-0">
        <input type="" name="" id="waktukajian" placeholder="Waktu kajian" class="form-control" style="max-width: 25rem">
      </div>
    </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Lokasi Kajian</div>
      
      <div class="col pr-0">
        <input type="" name="" id="lokasikajian" placeholder="Lokasi Kajian" class="form-control" style="max-width: 25rem">
      </div>
    </div>

    <br>

<div class="text-right mb-5">
 <button class="btn btn-app btn-kajian " id="save">Tambah Jadwal Kajian</button>
</div>
</div>
</div>
<script type="text/javascript">
  $('#datepicker').datepicker();
   var dataAll = [];
   $('#budaya').addClass('active');
$('#save').click(function () {
    dataAll = ({
        'temakajian': $('#tema').val(),
        'namamasjid': $('#namamasjid').val(),
        'namaustadz': $('#namaustadz').val(),
        'tanggalkajian': $('#datepicker').val(),
        'bulankajian': $('#bulankajian').val(),
        'waktukajian': $('#waktukajian').val(),
        'lokasikajian': $('#lokasikajian').val(),


    })
    // statusForm = variabel terdapat di main.js

      $('#save').addClass('disabled');
    console.log(dataAll);
     $.ajax({
      url: "/api/admin/add/kajian",
      type: "POST",
      data:  dataAll, 
      success:function(data){
        location.href="/admin/jadwalkajian";
        console.log(data);
      }
    }); 
});

$('#datepicker').datepicker({
            uiLibrary: 'bootstrap'
        });
</script>
@endsection
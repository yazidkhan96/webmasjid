@extends('master.master_admin')
@section('content')
<div id="formAdd">
	<div class="title-admin">Ubah Jadwal Pelatihan</div>
	<div class="content-admin">
		<div class="row m-0 mb-3">
			<div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Judul Pelatihan</div>
      
      <div class="col pr-0">
        <input type="" name="" value="{{$pelatihan->judul_pelatihan}}" id="judulpelatihan" plaxceholder="Judul pelatihan" class="form-control" style="max-width: 25rem">
      </div>
    </div>


  <div class="row m-0 mb-3">
    <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama masjid</div>
            <div class="col pr-0">
              <select class="form-control" id="namamasjid"  style="max-width: 25rem"> 
              <option hidden value="{{$pelatihan->masjid_id}}">{{$pelatihan->masjid->nama_masjid}}</option>
              @foreach(App\Masjid::all() as $masjid)
              <option value="{{$masjid->id}}">{{$masjid->nama_masjid}}</option>
              @endforeach
            </select>
          </div>  
  </div>

	<div class="row m-0 mb-3">
 <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Info pelatihan</div>
 <div class="col pr-0">
  <div id="desc"></div>
</div>
</div>
      

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold"  style="max-width: 14rem">Tanggal Pelatihan</div>
      
      <div class="col pr-0">
        <input id="datepicker" style="max-width: 25rem;" value="{{$pelatihan->tanggal_pelatihan}}">
      </div>
    </div>



    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama pemateri</div>
      
      <div class="col pr-0">
        <input type="" name="" value="{{$pelatihan->nama_pemateri}}" id="namapemateri" placeholder="Lokasi Pelatihan" class="form-control" style="max-width: 25rem">
      </div>
    </div>
    <div class="row m-0 mb-3">
         <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Gambar</div>
         <div class="col pr-0">
          <div class="row m-0">
            @foreach(explode(',',$pelatihan->gambar) as $gbr)
            <div class='img-view'>
              <img class='thumbnail-img' src="{{asset('images/Pelatihan')}}/{{$gbr}}"/>
              <div class='del-img' data-gbr="{{$gbr}}">Hapus</div>
            </div>
            @endforeach
             <input class="hidden" id="add-img" accept="image/*" type="file" multiple/>
             <div class="col p-0">
                <label for="add-img">
                   <div class="img-add">+</div>
               </label>
           </div>
       </div>
   </div>
</div>
<div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">No Handphone</div>
      
      <div class="col pr-0">
        <input type="" value="{{$pelatihan->nohp}}" name="" id="nohp" plaxceholder="Judul pelatihan" class="form-control" style="max-width: 25rem">
      </div>
    </div>


<div class="text-right mb-5">
 <button class="btn btn-app" id="save">Ubah Jadwal Pelatihan</button>
</div>
</div>
</div>
<script type="text/javascript">
  let index=0;
  let fileImgdel=[];
  $('.del-img').click(function(){
    fileImgdel.push($(this).attr('data-gbr'));
   $(this).parent().remove();
  });
$('#desc').summernote('code',`{!!$pelatihan->deskripsi!!}`);
var fileImg = [];
var dataAll = [];
$('#budaya').addClass('active');
$('#datepicker').datepicker();
$('#desc').summernote();
if(window.File && window.FileList && window.FileReader)
{
  $('#add-img').on('change',function (event) {
  var files = event.target.files; //FileList object
  for(var i = 0; i< files.length; i++)
  {
    var file = files[i];
    if(!file.type.match('image'))
    continue;
    var picReader = new FileReader();
    picReader.addEventListener("load",function(event){
      index++;
      var picFile = event.target;
      fileImg.push({id:index,gambar:picFile.result});
      $('#add-img').before("<div class='img-view'><img class='thumbnail-img' src='" + picFile.result + "'" +
      "title='" + picFile.name + "'/><div class='del-img'>Hapus</div></div>");
      $('.del-img').click(function(){
       $(this).parent().remove();
      });
    });
    picReader.readAsDataURL(file);
  }
  });
}
$('#save').click(function () {
  var img = $('.thumbnail-img').attr('src');
  

  dataAll = ({
  'judulpelatihan': $('#judulpelatihan').val(),
  'namamasjid': $('#namamasjid').val(),
  'deskripsi':$('#desc').summernote('code'),
  'tanggalpelatihan': $('#tanggalpelatihan').val(),
  'gambar': fileImg,
  'gambar_hapus': fileImgdel,
  'namapemateri': $('#namapemateri').val(),
  'nomorhandphone': $('#nohp').val(),
  

  })
  console.log(dataAll);
if(!img){
    alert('Gambar Tidak Ada');
  }else{
    $('#save').addClass('disabled');
    console.log(dataAll);
    $.ajax({
      url: '/api/admin/update/pelatihan/'+'{{$pelatihan->id}}',
      type: "POST",
      data:  dataAll,
    success:function(data){
    location.href="/admin/jadwalpelatihan";
      console.log(data);
    }
    });
  }
});
</script>
@endsection
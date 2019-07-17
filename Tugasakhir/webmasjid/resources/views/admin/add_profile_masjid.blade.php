@extends('master.master_admin')
@section('content')
<div id="formAdd">
    <div class="title-admin">Tambah Profile Masjid</div>
   <!--  <form action="{{url('admin/upload/masjid')}}" method="post" enctype="multipart/form-data">
      {{csrf_field()}} -->
    <div class="content-admin">
      <div class="row m-0 mb-3">
        <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama Masjid</div>
        
        <div class="col pr-0">
        <input type="" id="namamasjid"  placeholder="Nama Masjid" class="form-control" style="max-width: 25rem">
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Alamat Masjid</div>
      
      <div class="col pr-0">
        <input type="" id="alamatmasjid"  placeholder="Alamat Masjid" class="form-control" style="max-width: 25rem">
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Tahun Berdirinya Masjid</div>
      
      <div class="col pr-0">
        <input type="" id="tahunberdiri" placeholder="Tahun Berdirinya Masjid" class="form-control" style="max-width: 25rem">
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Gambar</div>
      <div class="col pr-0">
        <div class="row m-0">
          <input class="hidden" id="add-img" accept="image/*" type="file">
          <div class="col p-0">
            <label for="add-img">
              <div class="img-add">+</div>
            </label>
          </div>
        </div>
      </div>
    </div><br>
 
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Dekripsi</div>
      <div class="col pr-0">
        <div id="desc"></div>
      </div>
    </div>
    <div class="text-right mb-5">
      <button class="btn btn-app" id="save">Tambah Profile Masjid</button>
    </div>
  </div>
 <!--  </form> -->
</div>
<script type="text/javascript">
var fileImg = [];
var dataAll = [];
$('#budaya').addClass('active');
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
      var picFile = event.target;
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
  'namamasjid': $('#namamasjid').val(),
  'alamatmasjid': $('#alamatmasjid').val(),
  'tahunberdiri': $('#tahunberdiri').val(),
  'gambar': img,
  'deskripsi':$('#desc').summernote('code'),

  })
  console.log(dataAll);
  // statusForm = variabel terdapat di main.js
/*  if(statusForm == 0){
    alert('lengkapi Data');
  }
  else */if(!img){
    alert('Gambar Tidak Ada');
  }else{
    $('#save').addClass('disabled');
    console.log(dataAll);
    $.ajax({
      url: "/api/admin/upload/masjid",
      type: "POST",
      data:  dataAll,
    success:function(data){
      location.href="/admin/masjid";
      console.log(data);
    }
    });
  }
});
</script>
@endsection
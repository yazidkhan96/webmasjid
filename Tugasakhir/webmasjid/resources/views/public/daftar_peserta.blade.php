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
       <select class="form-control" id="jenispelatihan"  style="max-width: 25rem" >
          <option hidden="">Pilih pelatihan</option>
          @foreach(App\Pelatihan::all() as $pelatihan)
          <option value="{{$pelatihan->id}}">{{$pelatihan->judul_pelatihan}}</option>
          @endforeach
        </select>
        </select>
    </div>
  </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Alamat lengkap</div>
      
      <div class="col pr-0">
        <input type="" name="" id="alamat" placeholder="alamatlengkap" class="form-control" style="max-width: 25rem">
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
         <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem;">Upload identitas(opsional)</div>
         <div class="col pr-0">
          <div class="row m-0" style="position: relative;left: 1px;">
             <input class="hidden" id="add-img" accept="image/*" type="file"/>
             <div class="col p-0">
                <label for="add-img">
               </label>
           </div>
       </div>
   </div>
</div>    
      <div class="text-right mb-5">
        <button class="btn btn-app" id="save" style="position: absolute;right: 842px; padding: 4px 106px;">Kirim</button>
      </div>
</div>

<script type="text/javascript">
var fileImg = [];
var dataAll = [];
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
    'nama': $('#nama').val(),
    'jenispelatihan': $('#jenispelatihan').val(),
    'alamat': $('#alamat').val(),
    'gambar': img,
    'nohp': $('#nohp').val(),
    'email': $('#email').val(),
    })

console.log(dataAll);
      $.ajax({
        url: "/api/add/peserta/pelatihan",
        type: "POST",
        data:  dataAll,
      success:function(data){
        location.href="/daftar_peserta";
        console.log(data);
      }

      });
});

    </script>
@endsection
 
    

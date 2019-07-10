@extends('master.master_main')
@section('content')
<div id="formAdd" style="margin-left: 1rem;">
	<div class="title-admin">Tambah donasi</div>
	<div class="content-admin">

<div class="row m-0 mb-3">
  <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem;position: relative;
    right: 1rem;">Kategori Donasi</div>
 <div class="col pr-0">
        <select class="form-control" id="kategoridonasi"  style="max-width: 25rem; position:absolute; right: 64%; bottom: -1px;">
          <option hidden="">--Pilih kategori galang dana--</option>
          @foreach(App\Kategori_donasi::all() as $kategori)
            <option value="{{$kategori->id}}">{{$kategori->nama_kategori}}</option>
          @endforeach
        </select>
      </div>
  </div>
</div>


		<div class="row m-0 mb-3">
			<div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Judul penggalangan dana</div>
			<div class="col pr-0">
				<input type="" name="" id="judulgalang" placeholder="Judul penggalangan dana" class="form-control" style="max-width: 25rem">
			</div>
		</div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Target donasi</div>
      <div class="col pr-0">
        <input type="" name="" id="targetdonasi" placeholder="Target donasi" class="form-control input-number" style="max-width: 25rem">
      </div>
    </div>

<div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Batas waktu penggalangan dana</div>
      
 <div class="col pr-0">
        <select class="form-control" id="bataswaktu"  style="max-width: 25rem; position:absolute; right: 63%;">
          <option hidden="">--Pilih batas waktu--</option>
          <option>1 bulan</option>
          <option>3 bulan</option>
          <option>6 bulan</option>
        </select>
      </div>
  </div>
</div>


 <div class="row m-0 mb-3">
         <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem; position:relative; left:  1rem;">Gambar</div>
         <div class="col pr-0">
          <div class="row m-0">
             <input class="hidden" id="add-img" accept="image/*" type="file" multiple/>
             <div class="col p-0">
                <label for="add-img" style="margin-left:  1rem;" >
                   <div class="img-add">+</div>
               </label>
           </div>
       </div>
   </div>
</div>

<div class="row m-0 mb-3">
 <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem; position:relative;  left:   1rem;">Keterangan tentang penggalangan dana dan penggunaan tersebut untuk apa</div>
 <div class="col pr-0">
  <div id="desc"></div>
</div>
</div>
<div class="text-right mb-5">
 <button class="btn btn-app" id="save">Tambah donasi</button>
</div>
</div>
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
        'kategori': $('#kategoridonasi').val(),
        'judul': $('#judulgalang').val(),
        'target': $('#targetdonasi').val(),
        'bataswaktu': $('#bataswaktu').val(),
        'gambar': img,
        'deskripsi':$('#desc').summernote('code')
    })
    // statusForm = variabel terdapat di main.js
    if(!img){
    alert('Gambar Tidak Ada');
    }
    else{
      $('#save').addClass('disabled');
    console.log(dataAll);
     $.ajax({
      url: "/api/admin/upload/galangdana",
      type: "POST",
      data:  dataAll, 
      success:function(data){
        location.href="/admin/galangdana"
        console.log(data);
      }
    });
    }

});
</script>
@endsection
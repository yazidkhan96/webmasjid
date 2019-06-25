@extends('master.master_admin')
@section('content')
<div id="formAdd">
	<div class="title-admin">Tambah Jadwal kajian</div>
	<div class="content-admin">
		<div class="row m-0 mb-3">
			<div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Tema kajian</div>
      

			<div class="col pr-0">
				<input type="" name="" id="Nama" placeholder="Tema kajian" class="form-control" style="max-width: 25rem">
			</div>
		</div>
      <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama Ustadz</div>
      
      <div class="col pr-0">
        <input type="" name="" id="Alamat" placeholder="Nama Ustadz" class="form-control" style="max-width: 25rem">
      </div>
    </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Tanggal Kajian</div>
      
      <div class="col pr-0">
        <input type="" name="" id="Tahun" placeholder="Tanggal kajian" class="form-control" style="max-width: 25rem">
      </div>
    </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Bulan Kajian</div>
      
      <div class="col pr-0">
        <input type="" name="" id="Tahun" placeholder="Bulan Kajian" class="form-control" style="max-width: 25rem">
      </div>
    </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Waktu Kajian</div>
      
      <div class="col pr-0">
        <input type="" name="" id="Tahun" placeholder="Waktu kajian" class="form-control" style="max-width: 25rem">
      </div>
    </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Lokasi Kajian</div>
      
      <div class="col pr-0">
        <input type="" name="" id="Tahun" placeholder="Lokasi Kajian" class="form-control" style="max-width: 25rem">
      </div>
    </div>

    <br>

<div class="text-right mb-5">
 <button class="btn btn-app btn-kajian " id="save">Simpan</button>
</div>
</div>
</div>
<script type="text/javascript">
   var fileImg = [];
   var dataAll = [];
   $('#budaya').addClass('active');
   $('#desc').summernote();
   $('#desc2').summernote();
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
    $('.thumbnail-img').each(function (argument) {
        var img = $(this).attr('src');
        fileImg.push(img);
    });
    dataAll = ({
        'judul': $('#judul').val(),
        'kota': $('#kota').val(),
        'gambar': fileImg,
        'deskripsi':$('#desc').summernote('code')
    })
    // statusForm = variabel terdapat di main.js
    if(statusForm == 0){
        alert('lengkapi Data');
    }
    else if(fileImg == ''){
        alert('Gambar Tidak Ada');
    }
    else{
      $('#save').addClass('disabled');
    console.log(dataAll);
     $.ajax({
      url: "/api/admin/create/budaya",
      type: "POST",
      data:  dataAll, 
      success:function(data){
        location.href="/admin/budaya";
        console.log(data);
      }
    });
    }

});
</script>
@endsection
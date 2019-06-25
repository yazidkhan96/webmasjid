@extends('master.master_admin')
@section('content')
<div id="formAdd">
	<div class="title-admin">Perencanaan Kajian</div>
	<div class="content-admin">
		<div class="row m-0 mb-3">
			<div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Username Pengurus</div>
      

			<div class="col pr-0">
				<input type="" name="" id="Nama" placeholder="Username Pengurus" class="form-control" style="max-width: 25rem">
			</div>
		</div>
      <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama Masjid</div>
      
      <div class="col pr-0">
        <input type="" name="" id="Alamat" placeholder="Nama Masjid" class="form-control" style="max-width: 25rem">
      </div>
    </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Tanggal pelaksaan</div>
      
      <div class="col pr-0">
        <input type="" name="" id="Tahun" placeholder="Tanggal Pelaksaan" class="form-control" style="max-width: 25rem">
      </div>
    </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Waktu pelaksaan</div>
      
      <div class="col pr-0">
        <input type="" name="" id="Tahun" placeholder="Waktu Pelaksaan" class="form-control" style="max-width: 25rem">
      </div>
    </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Judul Kajian</div>
      
      <div class="col pr-0">
        <input type="" name="" id="Tahun" placeholder="Judul Pelatihan" class="form-control" style="max-width: 25rem">
      </div>
    </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Ustadz yang akan di undang</div>
      
      <div class="col pr-0">
        <input type="" name="" id="Tahun" placeholder="Pemateri yang akan di undang" class="form-control" style="max-width: 25rem">
      </div>
    </div>


     <div class="row m-0 mb-3">
         <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Gambar</div>
         <div class="col pr-0">
          <div class="row m-0">
             <input class="hidden" id="add-img" accept="image/*" type="file" multiple/>
             <div class="col p-0">
                <label for="add-img">
                   <div class="" style="display: inline-block;height: 9rem;background: #e0e0e0;width: 9rem;line-height: 91px;text-align: center;font-size: 37px;color: #9e9e9e;cursor: pointer;">+</div>
               </label>
           </div>
       </div>
   </div>
</div><br>
<div class="row m-0 mb-3">
 <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Biaya pelaksaan(tiket pesawat,hotel,dll)</div>
 <div class="col pr-0">
  <div id="desc2"></div>
</div>
</div>
<div class="text-right mb-5">
 <button class="btn btn-app" id="save">Tambah Perencanaan Kajian</button>
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
@extends('master.master_admin')
@section('content')
<div id="formAdd">
	<div class="title-admin">Tambah donasi</div>
	<div class="content-admin">

<div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Kategori Donasi</div>
      
<div class="col pr-0">
  <div class="container">
    <div class="row">

      <div class="col-xs-12">
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <select name="combo" class="form-control" style="position: relative;right: 7%;top: 6px;">
                      <option value="">--Pilih kategori donasi--</option>
                      <option value="1">Kaum Dhuafa</option>
                      <option value="2">Bencana alam</option>
                      <option value="3">Pembangunan Masjid</option>
                </select>

                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


		<div class="row m-0 mb-3">
			<div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Judul penggalangan dana</div>
			<div class="col pr-0">
				<input type="" name="" id="Nama" placeholder="Judul penggalangan dana" class="form-control" style="max-width: 25rem">
			</div>
		</div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Target donasi</div>
      <div class="col pr-0">
        <input type="" name="" id="Nama" placeholder="Target donasi" class="form-control input-number" style="max-width: 25rem">
      </div>
    </div>

<div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Batas waktu penggalangan dana</div>
      
<div class="col pr-0">
  <div class="container">
    <div class="row">

      <div class="col-xs-12">
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <select name="combo" class="form-control" style="position: relative;right: 7%;top: 6px;">
                      <option value="">--Pilih batas akhir waktu penggalangan--</option>
                      <option value="1">1 bulan</option>
                      <option value="2">3 bulan</option>
                      <option value="3">6 bulan</option>
                </select>

                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
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
</div>

<div class="row m-0 mb-3">
 <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Keterangan tentang penggalangan dana dan penggunaan tersebut untuk apa</div>
 <div class="col pr-0">
  <div id="desc2"></div>
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
  var img = $('.thumbnail-img').attr('src');



    dataAll = ({
        'judul': $('#judul').val(),
        'kota': $('#kota').val(),
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
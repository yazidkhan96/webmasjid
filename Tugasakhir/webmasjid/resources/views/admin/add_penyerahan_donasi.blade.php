@extends('master.master_admin')
@section('content')
<div id="formAdd">
	<div class="title-admin">Tambah Penyerahan Donasi</div>
	<div class="content-admin">
		<div class="row m-0 mb-3">
			<div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Tanggal Penyerahan</div>
			<div class="col pr-0">
				<input type="" name="" id="Nama" placeholder="Tanggal Penyerahan" class="form-control" style="max-width: 25rem">
			</div>
		</div>
<div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Jenis Penyerahan</div>
      
<div class="col pr-0">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <select id="select_penyerahan" class="form-control" style="position: relative;right: 7%;top: 6px;">
                      <option value="">--Pilih penyerahan--</option>
                      <option value="1" id="optzakat">Zakat</option>
                      <option value="2" id="optdonasi">Donasi</option>
                </select>
                  </div>
              </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


    <div class="row m-0 mb-3 hidden" id="penyerahandonasi">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Kategori Penyerahan</div>
      
<div class="col pr-0">
  <div class="container">
    <div class="row">

      <div class="col-xs-12">
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <select id="select_donasi" class="form-control" style="position: relative;right: 7%;top: 6px;">
                      <option value="">--Penyerahan Donasi--</option>
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

<div class="row m-0 mb-3 hidden" id="penyerahanzakat">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Kategori Penyerahan</div>
      
<div class="col pr-0">
  <div class="container">
    <div class="row">
      <div class="col-xs-12">
        <div class="row">
          <div class="col-sm-4">
            <div class="form-group">
              <select id="select_zakat" class="form-control" style="position: relative;right: 7%;top: 6px;">
                      <option value="">--Penyerahan Zakat--</option>
                      <option value="1">Zakat profesi</option>
                      <option value="2">Zakat maal</option>
                      <option value="3">Zakat fitrah</option>
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
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Tabel Donasi</div>
      
      <div class="col pr-0">
        <table  class="table text-center table-striped">
      <thead>
        <tr>
          <th scope="col">Jenis donasi</th>
          <th scope="col">Nama</th>
          <th scope="col">Jumlah donasi</th>
          <th scope="col">Rekening</th>
          <th scope="col">Status penyerahan</th>
        </tr>
      </thead>
      <tbody id="body-donasi">
      </tbody>
    </table>
      </div>
    </div>

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Total donasi</div>
      
      <div class="col pr-0">
        <input type="" name="" id="Alamat" placeholder="Total donasi" class="form-control" style="max-width: 25rem">
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
 <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Keterangan</div>
 <div class="col pr-0">
  <div id="desc2"></div>
</div>
</div>
<div class="text-right mb-5">
 <button class="btn btn-app" id="save">Tambah Penyerahan Donasi</button>
</div>
</div>
</div>
<script type="text/javascript">

  $('#select_penyerahan').on('change',function () {
    if ($(this).val()==1) {
      $('#penyerahandonasi').addClass('hidden');
      $('#penyerahanzakat').removeClass('hidden');
    }else if ($(this).val()==2) {
      $('#penyerahanzakat').addClass('hidden');
      $('#penyerahandonasi').removeClass('hidden');
    }

      console.log($(this).val())
  })




  $('#select_donasi').on('change',function () {
     let myNode= $('#body-donasi');
     while (myNode.firstChild) {
         myNode.removeChild(myNode.firstChild);
     }
    $.get("/api/get/donasi/by/kategori/"+$(this).val(), function(data, status){
      for (var i = 0,dataLength=data.length; i < dataLength; i++) {
         console.log($('#body-donasi').children());
         $('#body-donasi').html('')
     myNode.append(`
            <tr>
            <td>${data[i].kategori_id}</td>
            <td>${data[i].nama_pendonasi}</td>
            <td>${data[i].jumlah_donasi}</td>
            <td>${data[i].nama_bank}</td>
            <td>${data[i].status_penyerahan}</td>
          </tr>`
          ) 
      }
      console.log(data);
     });
  })
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
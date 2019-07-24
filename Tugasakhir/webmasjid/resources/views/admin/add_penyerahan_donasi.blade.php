@extends('master.master_admin')
@section('content')
<div id="formAdd">
	<div class="title-admin">Tambah Penyerahan</div>
	<div class="content-admin">
		<div class="row m-0 mb-3">
			<div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Tanggal Penyerahan</div>
			<div class="col pr-0">
				<input type="" name="" id="tanggalpenyerahan" placeholder="Tanggal Penyerahan" class="form-control" style="max-width: 25rem">
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
                      <option value="2">Pembangunan Masjid</option>
                      <option value="3">Bencana alam</option>
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
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Data Tabel</div>
      
      <div class="col pr-0">
        <table  class="table text-center table-striped">
      <thead>
        <tr>
          <th scope="col">Untuk Penyerahan</th>
          <th scope="col">Nama</th>
          <th scope="col">Jumlah Penyerahan</th>
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
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Total Penyerahan</div>
      
      <div class="col pr-0">
        <input type="" name="" id="total_donasi" placeholder="Total donasi" class="form-control" style="max-width: 25rem" readonly>
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
  <div id="desc"></div>
</div>
</div>
<div class="text-right mb-5">
 <button class="btn btn-app" id="save">Tambah Penyerahan</button>
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


let total_donasi=0;
let index=0;
let jenis='';
let sumber_id=[];
  $('#select_donasi').on('change',function () {
     let myNode= $('#body-donasi');
         myNode.html('');
         total_donasi=0;
         let arr=['Kaum dhuafa','Pembangunan masjid','Bencana alam'];
         jenis=arr[parseInt($(this).val())-1];
    $.get("/api/get/donasi/by/kategori/"+$(this).val(), function(data, status){
      for (var i = 0,dataLength=data.length; i < dataLength; i++) {
         console.log($('#body-donasi').children());
         total_donasi+=parseInt(data[i].jumlah_donasi);
         sumber_id.push(data[i].id);
     myNode.append(`
            <tr>
            <td>${data[i].judul_donasi}</td>
            <td>${data[i].nama_pendonasi}</td>
            <td>${data[i].jumlah_donasi}</td>
            <td>${data[i].nama_bank}</td>
            <td>${data[i].status_penyerahan}</td>
          </tr>`
          ) 
      }
      $('#total_donasi').val(total_donasi);
      console.log(data);
      console.log(total_donasi);
     });
  })

  $('#select_zakat').on('change',function () {
     let myNode= $('#body-donasi');
         myNode.html('');
         total_donasi=0;
         let arr=['Zakat profesi','Zakat maal','Zakat fitrah'];
         console.log(parseInt($(this).val())+1)
         jenis=arr[parseInt($(this).val())-1];
    $.get("/api/get/zakat/by/kategori/"+$(this).val(), function(data, status){
      for (var i = 0,dataLength=data.length; i < dataLength; i++) {
        total_donasi+=parseInt(data[i].jumlah_zakat);
        sumber_id.push(data[i].id);
     myNode.append(`
            <tr>
            <td>${data[i].zakat_id}</td>
            <td>${data[i].nama_penzakat}</td>
            <td>${data[i].jumlah_zakat}</td>
            <td>${data[i].nama_bank}</td>
            <td>${data[i].status_penyerahan}</td>
          </tr>`
          ) 
      }
      $('#total_donasi').val(total_donasi);
      console.log(data);
     });
  })
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
    dataAll = ({
        'tanggalpenyerahan': $('#tanggalpenyerahan').val(),
        'total_donasi': $('#total_donasi').val(),
        'sumber_id': sumber_id,
        'jenis': jenis,
        'gambar': fileImg,
        'deskripsi':$('#desc').summernote('code')
    })
    console.log(dataAll);
    // statusForm = variabel terdapat di main.js
     if(fileImg == ''){
        alert('Gambar Tidak Ada');
    }
    else{
      $('#save').addClass('disabled');
    console.log(dataAll);
     $.ajax({
      url: "/api/penyerahan/bantuan",
      type: "POST",
      data:  dataAll, 
      success:function(data){
        location.href="/admin/penyerahan/donasi";
        console.log(data);
      }
    });
    }

});
</script>
@endsection
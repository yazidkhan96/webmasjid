@extends('master.master_main')
@section('content')
<div id="formAdd">
	<div class="title-admin">Tambah Jadwal Pelatihan</div>
	<div class="content-admin">
		<div class="row m-0 mb-3">
			<div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Judul Pelatihan</div>
      
      <div class="col pr-0">
        <input type="" name="" id="judulpelatihan" plaxceholder="Judul pelatihan" class="form-control" style="max-width: 25rem">
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

	<div class="row m-0 mb-3">
    <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Info pelatihan</div>
   <div class="col pr-0">
    <div id="desc"></div>
  </div>
</div>
      

    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Tanggal Pelatihan</div>
      
      <div class="col pr-0">
       <input id="datepicker" style="max-width: 25rem;">
      </div>
    </div>



    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama pemateri</div>
      
      <div class="col pr-0">
        <input type="" name="" id="namapemateri" placeholder="Lokasi Pelatihan" class="form-control" style="max-width: 25rem">
      </div>
    </div>
    <div class="row m-0 mb-3">
         <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Gambar</div>
         <div class="col pr-0">
          <div class="row m-0">
             <input class="hidden" id="add-img" accept="image/*" type="file" multiple/>
             <div class="col p-0">
                <label for="add-img" class="img-add">
                   <div class="postion-gambar">+</div>
               </label>
           </div>
       </div>
   </div>
</div>
<div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">No Handphone</div>
      
      <div class="col pr-0">
        <input type="" name="" id="nohp" plaxceholder="Judul pelatihan" class="form-control" style="max-width: 25rem">
      </div>
    </div>


<div class="text-right mb-5">
 <button class="btn btn-app" id="save" style="position: relative;right: 692px;">Simpan</button>
</div>
</div>
</div>
<script type="text/javascript">
  let index=0;
var fileImg = [];
var dataAll = [];
$('#budaya').addClass('active');
$('#datepicker').datepicker();
$('#desc').summernote();
 if(window.File && window.FileList && window.FileReader)
   {
      $('#add-img').on('change',function (event) {
                console.log($('#add-img').val());

      var files = event.target.files; //FileList object
      for(var i = 0,fileLength=files.length; i<fileLength; i++)
      {
         var file = files[i];
        // fileImg.push(file);
         if(!file.type.match('image'))
            continue;
        var picReader = new FileReader();
        picReader.addEventListener("load", function(event){
            index++;
            var picFile = event.target;
            fileImg.push({id:index,gambar:picFile.result});
            $('#add-img').before(`<div class='img-view'><img class='thumbnail-img' src='${picFile.result}' title='${picFile.name}'/><div class='del-img' data-id=${index}>Hapus</div></div>`);

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
    'tanggalpelatihan': $('#datepicker').val(),
    'gambar': fileImg,
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
        url: "/api/admin/add/pelatihan",
        type: "POST",
        data:  dataAll,
      success:function(data){
        location.href="/jadwal_pelatihan";
        console.log(data);
      }
      });
    }
});
</script>
@endsection

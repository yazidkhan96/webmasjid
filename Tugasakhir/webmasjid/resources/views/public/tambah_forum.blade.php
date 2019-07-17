@extends('master.master_main')
@section('content')
<div id="formAdd">
	<div class="title-admin">Tambah Forum</div>
	<div class="content-admin">
		<div class="row m-0 mb-3">
			<div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem;     margin-left: 12px; ">Judul Forum</div>
      

			<div class="col pr-0">
				<input type="" name="" id="judulforum" placeholder="Judul Forum" class="form-control" style="max-width: 25rem; position: absolute;left: -101px;">
			</div>
		</div>

     <div class="row m-0 mb-3">
         <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem;     margin-left: 12px;">Gambar</div>
         <div class="col pr-0">
          <div class="row m-0" style="position: relative;left: -115px;">
             <input class="hidden" id="add-img" accept="image/*" type="file"/>
             <div class="col p-0">
                <label for="add-img">
               </label>
           </div>
       </div>
   </div>
</div><br>

  <div class="row m-0 mb-3">
   <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem;margin-left: 12px;">Deskripsi Forum</div>
     <div class="col pr-0" style="position: relative;right: 113px;">
      <div id="descforum"></div>
    </div>
  </div>
<div class="text-right mb-5">
 <button class="btn btn-app" id="save" style="margin-right: 113px;">Simpan</button>
</div>
</div>
</div>
<script type="text/javascript">
   var fileImg = [];
   var dataAll = [];
   $('#budaya').addClass('active');
   $('#descforum').summernote();
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
        'judulforum': $('#judulforum').val(),
        'gambar': img,
        'deskripsi':$('#descforum').summernote('code')
    })
    // statusForm = variabel terdapat di main.js
    if(!img){
    alert('Gambar Tidak Ada');
    }else{
      $('#save').addClass('disabled');
    console.log(dataAll);
     $.ajax({
      url: "/api/admin/upload/forum",
      type: "POST",
      data:  dataAll, 
      success:function(data){
       location.href="/admin/forum";
        console.log(data);
      }
    });
    }

});
</script>
@endsection
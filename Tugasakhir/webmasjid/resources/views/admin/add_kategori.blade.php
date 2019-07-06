@extends('master.master_admin')
@section('content')
<div id="formAdd">
	<div class="title-admin">Tambah Kategori</div>
	<div class="content-admin">
		<div class="row m-0 mb-3">
			<div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Nama Kategori</div>
      

			<div class="col pr-0">
				<input type="" name="" id="namakategori" placeholder="Nama Kategori" class="form-control" style="max-width: 25rem">
			</div>
		</div>
<div class="text-right mb-5">
 <button class="btn btn-app" id="save">Simpan</button>
</div>
</div>
</div>
<script type="text/javascript">
   var dataAll = [];
$('#save').on('click',function () {
dataAll = ({
'namakategori': $('#namakategori').val(),
});
  console.log(dataAll);
  $.ajax({
  url: "/api/admin/upload/kategori",
  type: "POST",
  data:  dataAll,
  success:function(data){
  location.href="/admin/kategori";
  console.log(data);
  }
  });
});
</script>
@endsection
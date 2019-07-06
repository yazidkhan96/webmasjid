@extends('master.master_admin')
@section('content')
<div>
	<div class="title-admin">Kategori donasi</div>
	<div class="content-admin">
		<div class="text-right mb-3">
			<a class="btn btn-app" href="{{url('/admin/add/kategori')}}">Tambah Kategori</a>
		</div>
		<table id="table_id" class="table text-center table-striped">
			<thead>
				<tr>
					
					<th scope="col">Nama kategori</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
					@foreach(App\Kategori_donasi::all() as $kategori)
				<tr>
					<td>{{$kategori->nama_kategori}}</td>
					<td>
						<a dataid="" data-toggle="modal" data-target="#modalDelete" href="" class="material-icons delete">delete</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>
<div id="modalDelete" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Hapus jadwal kajian</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin menghapus Masjid ini ?</p>
      </div>
      <div class="modal-footer">
        <a type="button" class="btn btn-app" id="delete">Ya</a>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
	$('.delete').click(function () {
		var id = $(this).attr('dataid');
		$('#delete').attr('href',`{{url('/api/admin/delete/wisata/`+id+`')}}`);
	})
</script>
@endsection
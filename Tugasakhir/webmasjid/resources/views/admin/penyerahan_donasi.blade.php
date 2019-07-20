@extends('master.master_admin')
@section('content')
<div>
	<div class="title-admin">Penyerahan Donasi</div>
	<div class="content-admin">
		<div class="text-right mb-3">
			<a class="btn btn-app" href="{{url('/admin/add/penyerahan/donasi')}}">Tambah Penyerahan donasi</a>
		</div>
		<table id="table_id" class="table text-center table-striped">
			<thead>
				<tr>
					<th scope="col">Tanggal Penyerahan</th>
					<th scope="col">Tipe Penyerahan</th>
					<th scope="col">Kategori Id</th>
					<th scope="col">Total</th>
					<th scope="col">Gambar</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach(App\Penyerahan::all() as $bantuan)
				<tr>
					<td>{{$bantuan->tanggal}}</td>
					<td>{{$bantuan->kategori_penyerahan}}</td>
					<td>{{$bantuan->sumber_dana_id}}</td>
					<td>{{$bantuan->total_donasi}}</td>
					<td>{{$bantuan->gambar}}</td>
					<td>
						<a href="{{url('/admin/edit/wisata')}}" class="material-icons">edit</a>
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
        <h4 class="modal-title">Hapus Penyerahan Donasi</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin menghapus Penyerahan ini ?</p>
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
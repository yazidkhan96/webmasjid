@extends('master.master_admin')
@section('content')
<div>
	<div class="title-admin">Data pengurus</div>
	<div class="content-admin">
		<div class="text-right mb-3">
			<a class="btn btn-app" href="{{url('/admin/add/user')}}">Tambah Pengurus</a>
		</div>
		<table id="table_id" class="table text-center table-striped">
			<thead>
				<tr>
					<th scope="col">Username Pengurus</th>
					<th scope="col">No Hp/Wa</th>
					<th scope="col">Email</th>
					<th scope="col">Avatar</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach(App\Pengurus::all() as $pengurus)
				<tr>
					<td>{{$pengurus->name}}</td>
					<td>{{$pengurus->nohp_wa}}</td>
					<td>{{$pengurus->email}}</td>
					<td>{{$pengurus->gambar}}</td>
					<td>{{$pengurus->created_at}}</td>
					<td>
						<a dataid="{{url('/admin/delete/user',$pengurus->id)}}" href="" data-toggle="modal" data-target="#modalDelete" class="material-icons delete">delete</a>
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
        <h4 class="modal-title">Hapus Pengurus</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin menghapus Pengurus ini ?</p>
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
		$('#delete').attr('href',id);
	})
</script>
@endsection
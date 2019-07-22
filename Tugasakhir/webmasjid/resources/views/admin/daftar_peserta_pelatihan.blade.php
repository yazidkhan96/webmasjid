@extends('master.master_admin')
@section('content')
<div>
	<div class="title-admin">Daftar Peserta Pelatihan</div>
	<div class="content-admin">
		<table id="table_id" class="table text-center table-striped">
			<thead>
				<tr>
					<th scope="col">Nama</th>
					<th scope="col">alamat</th>
					<th scope="col">Judul Pelatihan</th>
					<th scope="col">No Hp</th>
					<th scope="col">Email</th>
					<th scope="col">Foto data diri</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach(App\Peserta_pelatihan::all() as $peserta);
				<tr>
					<td>{{$peserta->nama_peserta}}</td>
					<td>{{$peserta->alamat_lengkap}}</td>
					<td>{{$peserta->pelatihan_id}}</td>
					<td>{{$peserta->nohp}}</td>
					<td>{{$peserta->email}}</td>
					<td>{{$peserta->foto_data_diri}}</td>
					<td>
						
						<a href="{{url('/verif/peserta',$peserta->id)}}" class="material-icons">done</a>
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
        <h4 class="modal-title">Hapus peserta pelatihan</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin menghapus peserta ini ?</p>
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
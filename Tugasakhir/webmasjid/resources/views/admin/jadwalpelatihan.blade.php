@extends('master.master_admin')
@section('content')
<div>
	<div class="title-admin">Jadwal Pelatihan</div>
	<div class="content-admin">
		<div class="text-right mb-3">
			<a class="btn btn-app" href="{{url('/admin/add/jadwal/pelatihan')}}">Tambah Jadwal Pelatihan</a>
		</div>

		<table id="table_id" class="table text-center table-striped">
			<thead>
				<tr>
					<th scope="col">Judul</th>
					<th scope="col">Nama Masjid</th>
					<th scope="col">Tanggal</th>
					<th scope="col">pemateri</th>
					<th scope="col">Gambar</th>
					<th scope="col">No Hp</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach(App\Pelatihan::all() as $pelatihan)
				<tr>
					<td>{{$pelatihan->judul_pelatihan}}</td>
					<td>{{$pelatihan->masjid_id}}</td>
					<td>{{$pelatihan->tanggal_pelatihan}}</td>
					<td>{{$pelatihan->nama_pemateri}}</td>
					<td>{{$pelatihan->gambar}}</td>
					<td>{{$pelatihan->nohp}}</td>
					<td>
						<a href="{{url('/admin/edit/jadwal/pelatihan',$pelatihan->id)}}" class="material-icons">edit</a>
						<a dataid="{{url('/admin/delete/jadwal/pelatihan',$pelatihan->id)}}" data-toggle="modal" data-target="#modalDelete" href="" class="material-icons delete">delete</a>
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
        <h4 class="modal-title">Hapus jadwal pelatihan</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin menghapus jadwal pelatihan ini ?</p>
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
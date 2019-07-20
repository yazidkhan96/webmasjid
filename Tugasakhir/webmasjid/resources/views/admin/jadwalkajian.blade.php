@extends('master.master_admin')
@section('content')
<div>
	<div class="title-admin">Jadwal Kajian</div>
	<div class="content-admin">
		<div class="text-right mb-3">
			<a class="btn btn-app" href="{{url('/admin/add/jadwal/kajian')}}">Tambah Jadwal Kajian</a>
		</div>
		<table id="table_id" class="table text-center table-striped">
			<thead>
				<tr>
					<th scope="col">Tema</th>
					<th scope="col">Nama Masjid</th>
					<th scope="col">Nama Ustadz</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Bulan</th>
					<th scope="col">Waktu</th>
					<th scope="col">Lokasi</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach(App\Jadwal_kajian::all() as $jadwalkajian)
				<tr>
					<td>{{$jadwalkajian->tema_kajian}}</td>
					<td>{{$jadwalkajian->masjid_id}}</td>
					<td>{{$jadwalkajian->nama_ustadz}}</td>
					<td>{{$jadwalkajian->tanggal_kajian}}</td>
					<td>{{$jadwalkajian->bulan_kajian}}</td>
					<td>{{$jadwalkajian->waktu_kajian}}</td>
					<td>{{$jadwalkajian->lokasi}}</td>
					<td>
						<a href="{{url('/admin/edit/jadwal/kajian',$jadwalkajian->id)}}" class="material-icons">edit</a>
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
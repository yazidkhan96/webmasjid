@extends('master.master_admin')
@section('content')
<div>
	<div class="title-admin">Profile Masjid</div>
	<div class="content-admin">
		<div class="text-right mb-3">
			<a class="btn btn-app" href="{{url('/admin/add/profile/masjid')}}">Tambah Profile Masjid</a>
		</div>
		<table id="table_id" class="table text-center table-striped">
			<thead>
				<tr>
					<th scope="col">Nama Masjid</th>
					<th scope="col">Alamat</th>
					<th scope="col">Tahun berdiri</th>
					<th scope="col">Gambar</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach(App\Masjid::all() as $masjid)
				<tr>
					<td>{{$masjid->nama_masjid}}</td>
					<td>{{$masjid->alamat_masjid}}</td>
					<td>{{$masjid->tahun_beridiri}}</td>
					<td>{{$masjid->gambar}}</td>
					<td>
						<a href="{{url('/admin/edit/profile/masjid',$masjid->id)}}" class="material-icons">edit</a>
						<a dataid="{{url('/admin/delete/profile/masjid',$masjid->id)}}" data-toggle="modal" data-target="#modalDelete" href="" class="material-icons delete">delete</a>
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
        <h4 class="modal-title">Hapus Masjid</h4>
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
		$('#delete').attr('href',id);
	})
</script>
@endsection
@extends('master.master_admin')
@section('content')
<div>
	<div class="title-admin">Perencanaan Kajian</div>
	<div class="content-admin">
		<div class="text-right mb-3">
			<a class="btn btn-app" href="{{url('/admin/add/perencanaan/kajian')}}">Tambah Perencanaan Kajian</a>
		</div>
		<table id="table_id" class="table text-center table-striped">
			<thead>
				<tr>
					<th scope="col">Nama Pengurus</th>
					<th scope="col">Judul perencanaan</th>
					<th scope="col">Tanggal Pelaksaan</th>
					<th scope="col">Lokasi</th>
					<th scope="col">Ustadz</th>
					<th scope="col">Jenis Perencanaan</th>
					<th scope="col">Biaya Pelaksaan</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach(App\Perencanaan_kajian_pelatihan::all() as $perencanaankajian)
				<tr>
					<td>{{$perencanaankajian->pengurus_id}}</td>
					<td>{{$perencanaankajian->judul_perencanaan}}</td>
					<td>{{$perencanaankajian->tanggal_pelaksaan}}</td>
					<td>{{$perencanaankajian->lokasi}}</td>
					<td>{{$perencanaankajian->ustadz}}</td>
					<td>{{$perencanaankajian->jenis_perencanaan}}</td>
					<td>{{$perencanaankajian->biaya_pelaksaan}}</td>
					<td>
						<a href="{{url('/detail/masjid,$i')}}" class="material-icons">visibility</a>
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
        <h4 class="modal-title">Hapus Perencanaan</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin menghapus Perencanaan ini ?</p>
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
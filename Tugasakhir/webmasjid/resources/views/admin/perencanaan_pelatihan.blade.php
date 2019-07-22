@extends('master.master_admin')
@section('content')
<div>
	<div class="title-admin">Perencanaan Pelatihan</div>
	<div class="content-admin">
		<div class="text-right mb-3">
			<a class="btn btn-app" href="{{url('/admin/add/perencanaan/pelatihan')}}">Tambah Perencanaan pelatihan</a>
		</div>
		<table id="table_id" class="table text-center table-striped">
			<thead>
				<tr>
					<th scope="col">Nama Pengurus</th>
					<th scope="col">Judul perencanaan</th>
					<th scope="col">Tanggal Pelaksaan</th>
					<th scope="col">Bulan Pelaksaan</th>
					<th scope="col">Lokasi</th>
					<th scope="col">Ustadz</th>
					<th scope="col">Biaya Pelaksaan</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach(App\Perencanaan_kajian_pelatihan::where('jenis_perencanaan','Pelatihan')->get() as $perencanaanpelatihan)
				<tr>
					<td>{{$perencanaanpelatihan->user_id}}</td>
					<td>{{$perencanaanpelatihan->judul_perencanaan}}</td>
					<td>{{date('d',strtotime($perencanaanpelatihan->tanggal_pelaksanaan))}}</td>
					<td>{{date('M',strtotime($perencanaanpelatihan->tanggal_pelaksanaan))}}</td>
					<td>{{$perencanaanpelatihan->lokasi}}</td>
					<td>{{$perencanaanpelatihan->ustadz}}</td>
					<td>{{$perencanaanpelatihan->biaya_pelaksanaan}}</td>
					<td>
						<a href="{{url('/admin/edit/perencanaan/pelatihan',$perencanaanpelatihan->id)}}" class="material-icons">edit</a>
						<a dataid="{{url('/admin/delete/perencanaan/pelatihan',$perencanaanpelatihan->id)}}" data-toggle="modal" data-target="#modalDelete" href="" class="material-icons delete">delete</a>
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
		$('#delete').attr('href',id);
	})
</script>
@endsection
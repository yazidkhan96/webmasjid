@extends('master.master_admin')
@section('content')
<div>
	<div class="title-admin">Request Kajian</div>
	<div class="content-admin">
		<table id="table_id" class="table text-center table-striped">
			<thead>
				<tr>
					<th scope="col">Nama</th>
					<th scope="col">Email</th>
					<th scope="col">Tanggal Pelaksaan</th>
					<th scope="col">Lokasi</th>
					<th scope="col">nohp</th>
					<th scope="col">Deskripsi</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach(App\Request_kajian_pelatihan::where('jenis_request','Kajian')->get() as $requestkajian)
				<tr>
					<td>{{$requestkajian->nama_pengunjung}}</td>
					<td>{{$requestkajian->email}}</td>
					<td>{{$requestkajian->tanggal_pelaksanaan}}</td>
					<td>{{$requestkajian->lokasi}}</td>
					<td>{{$requestkajian->nohp}}</td>
					<td>{{$requestkajian->deskripsi}}</td>
					<td>
						@if($requestkajian->status_request=='menunggu')
						<a href="{{url('/admin/verif/request',$requestkajian->id)}}" class="material-icons">done</a>
						@endif
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
        <h4 class="modal-title">Hapus Request Kajian</h4>
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
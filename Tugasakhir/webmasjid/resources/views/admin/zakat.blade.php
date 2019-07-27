@extends('master.master_admin')
@section('content')
<div>
	<div class="title-admin">Penzakat</div>
	<div class="content-admin">
		<table id="table_id" class="table text-center table-striped">
			<thead>
				<tr>
					<th scope="col">Nama</th>
					<th scope="col">No HP</th>
					<th scope="col">Email</th>
					<th scope="col">Jumlah zakat</th>
					<th scope="col">Kategori Zakat</th>
					<th scope="col">status</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach(App\Penzakat::all() as $zakat)
				<tr>
					<td>{{$zakat->nama_penzakat}}</td>
					<td>{{$zakat->no_hp}}</td>
					<td>{{$zakat->email}}</td>
					<td>{{$zakat->jumlah_zakat}}</td>
					<td>{{$zakat->zakat_id}}</td>
					<td>{{$zakat->status}}</td>
					<td>
						@if($zakat->status=='sudahbayar')
						<a href="{{url('/confirm/zakat',$zakat->id)}}" class="material-icons">done</a>
						@endif
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
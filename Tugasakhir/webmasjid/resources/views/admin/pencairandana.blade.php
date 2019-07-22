@extends('master.master_admin')
@section('content')
<div>
	<div class="title-admin">Pencairan dana</div>
	<div class="content-admin">
		<table id="table_id" class="table text-center table-striped">
			<thead>
				<tr>
					<th scope="col">Username Penggalang</th>
					<th scope="col">Jumlah Pencairan</th>
					<th scope="col">Bank tujuan</th>
					<th scope="col">Nama rekening</th>
					<th scope="col">nomor rekening</th>
					<th scope="col">email</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach(App\Penarikan::all() as $pencairan)
				<tr>
					<td>{{$pencairan->user_id}}</td>
					<td>{{$pencairan->jumlah_penarikan}}</td>
					<td>{{$pencairan->bank_tujuan}}</td>
					<td>{{$pencairan->nama_rekening}}</td>
					<td>{{$pencairan->nomor_rekening}}</td>
					<td>{{$pencairan->email}}</td>
					<td>
						<a href="{{url('/admin/confirm/penarikan',$pencairan->id)}}" class="material-icons">alternate_email</a>
						<a dataid="" data-toggle="modal" data-target="#modalDelete" href="" class="material-icons delete">delete</a>
						@if($pencairan->status=='pending')
						<a href="{{url('/admin/verifikasi/pencairan',$pencairan->id)}}" class="material-icons">done</a>
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
        <h4 class="modal-title">Hapus Pencairan</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin menghapus Pencairan dana ini ?</p>
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
@extends('master.master_admin')
@section('content')
<div>
	<div class="title-admin">Penggalangan Dana Donasi</div>
	<div class="content-admin">
		<div class="text-right mb-3">
			<a class="btn btn-app" href="{{url('/admin/add/galangdana')}}">Tambah galang dana</a>
		</div>
		<table id="table_id" class="table text-center table-striped">
			<thead>
				<tr>
					<th scope="col">Kategori Donasi</th>
					<th scope="col">Judul donasi</th>
					<th scope="col">Target biaya</th>
					<th scope="col">batas waktu</th>
					<th scope="col">Gambar</th>
					<th scope="col">Tanggal</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach(App\Galang_dana::all() as $galangdana)
				<tr>
					<td>{{$galangdana->kategori_id}}</td>
					<td>{{$galangdana->judul}}</td>
					<td>{{$galangdana->biaya_yang_dibutuhkan}}</td>
					<td>{{$galangdana->batas_waktu}}</td>
					<td>{{$galangdana->gambar}}</td>
					<td>{{$galangdana->created_at}}</td>
					<td>
						<a href="{{url('/admin/edit/galangdana',$galangdana->id)}}" class="material-icons">edit</a>
						<a dataid="{{url('/admin/delete/galang/dana',$galangdana->id)}}" data-toggle="modal" data-target="#modalDelete" href="" class="material-icons delete">delete</a>
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
        <h4 class="modal-title">Hapus Donasi</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin menghapus Donasi ini ?</p>
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
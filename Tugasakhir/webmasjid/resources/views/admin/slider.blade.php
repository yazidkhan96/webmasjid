@extends('master.master_admin')
@section('content')
<div>
	<div class="title-admin">Slider</div>
	<div class="content-admin">
		<div class="text-right mb-3">
			<a class="btn btn-app" href="{{url('/admin/add/slider')}}">Tambah Slider</a>
		</div>
		<table id="table_id" class="table text-center table-striped">
			<thead>
				<tr>
					<th scope="col">Nama Slider</th>
					<th scope="col">Tanggal</th>
					<th scope="col">gambar</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach(App\Slider::all() as $slider)
				<tr>
					<td>{{$slider->judul}}</td>
					<td>{{$slider->gambar}}</td>
					<td>{{$slider->created_at}}</td>
					<td>
						<a href="{{url('/admin/edit/slider',$slider->id)}}" class="material-icons">edit</a>
						<a dataid="{{url('/admin/delete/slider',$slider->id)}}" data-toggle="modal" data-target="#modalDelete" href="" class="material-icons delete">delete</a>
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
        <h4 class="modal-title">Hapus Slider</h4>
      </div>
      <div class="modal-body">
        <p>Apakah anda yakin menghapus Slider ini ?</p>
      </div>
      <div class="modal-footer">
        <a class="btn btn-app" id="delete">Ya</a>
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
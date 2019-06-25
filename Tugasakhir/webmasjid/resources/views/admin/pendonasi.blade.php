@extends('master.master_admin')
@section('content')
<div>
	<div class="title-admin">Daftar Pendonasi</div>
	<div class="content-admin">
		<table id="table_id" class="table text-center table-striped">
			<thead>
				<tr>
					<th scope="col">Nama</th>
					<th scope="col">Email</th>
					<th scope="col">Jumlah donasi</th>
					<th scope="col">Untuk donasi</th>
					<th scope="col">Rekening</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td>
						<a href="{{url('/admin/edit/wisata')}}" class="material-icons">done</a>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<script type="text/javascript">
	$('.delete').click(function () {
		var id = $(this).attr('dataid');
		$('#delete').attr('href',`{{url('/api/admin/delete/wisata/`+id+`')}}`);
	})
</script>
@endsection
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
					<th scope="col">status</th>
					<th scope="col">Aksi</th>
				</tr>
			</thead>
			<tbody>
				@foreach(App\Donasi_pengunjung::all() as $donasi)
				<tr>
					<td>{{$donasi->nama_pendonasi}}</td>
					<td>{{$donasi->email}}</td>
					<td>{{$donasi->jumlah_donasi}}</td>
					<td>{{$donasi->judul_donasi}}</td>
					<td>{{$donasi->nama_bank}}</td>
					<td>{{$donasi->status}}</td>
					<td>
						@if($donasi->status=='sudahbayar')
						<a href="{{url('/admin/verif/donasi',$donasi->id)}}" class="material-icons">done</a>
						@endif
					</td>
				</tr>
				@endforeach
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
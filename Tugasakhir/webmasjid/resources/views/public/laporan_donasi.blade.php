@extends('master.master_main')
@section('content')


<label style="position: relative;left: 77%;top: 10rem;">Periode laporan :</label>
<div class="dropdown" style="position: relative;left: 87%;top: 8rem;">
  <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Semua data
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
    <button class="dropdown-item" type="button">Action</button>
    <button class="dropdown-item" type="button">Another action</button>
    <button class="dropdown-item" type="button">Something else here</button>
  </div>
</div>
<table class="table table-bordered" style="position: relative;top: 192px;left: 5%;width: 90%;">
  <thead>
    <tr>
      <th scope="col">No</th>
      <th scope="col">Jenis Donasi</th>
      <th scope="col">Untuk donasi</th>
      <th scope="col">Tanggal Penyerahan</th>
      <th scope="col">Detail</th>
	 </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>.</td>
      <td>.</td>
      <td>.</td>
      <td style="text-align: center;"><a href="{{url('/detail_laporan_donasi')}}">Info lebih lanjut</a></td>

    </tr>
  </tbody>
</table>








@endsection
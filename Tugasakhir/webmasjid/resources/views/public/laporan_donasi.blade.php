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
      <th scope="col">Judul donasi</th>
      <th scope="col">Jumlah donasi</th>
      <th scope="col">Tanggal Penerimaan</th>
      <th scope="col">Nama pendonasi</th>
   </tr>
  </thead>
  <tbody>
      @foreach(App\Donasi_pengunjung::where('status_penyerahan','diserahkan')->get() as $donasi)
    <tr>
      <td>{{$donasi->judul_donasi}}</td>
      <td>{{$donasi->jumlah_donasi}}</td>
      <td>{{$donasi->created_at}}</td>
       <td>{{$donasi->nama_pendonasi}}</td>
    </tr>
    @endforeach
  </tbody>
</table>


<table class="table table-bordered" style="position: relative;top: 232px;left: 5%;width: 90%;">
  <thead>
    <tr>
      <th scope="col">Tanggal Penyerahan</th>
      <th scope="col">Kategori Penyerahan</th>
      <th scope="col">Total Donasit</th>
      <th scope="col">Detail</th>
   </tr>
  </thead>
  <tbody>
    @foreach(App\Penyerahan::whereIn('kategori_penyerahan',['Kaum dhuafa','Pembangunan masjid','Bencana alam'])->get() as $penyerahan)
    <tr>
      <td>{{$penyerahan->tanggal}}</td>
      <td>{{$penyerahan->kategori_penyerahan}}</td>
      <td>{{$penyerahan->total_donasi}}</td>
      <td style="text-align: center;"><a href="{{url('/detail_laporan_donasi',$penyerahan->id)}}">Info lebih lanjut</a></td>
    </tr>
    @endforeach
  </tbody>
</table> 
@endsection
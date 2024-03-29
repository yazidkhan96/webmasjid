@extends('master.master_main')
@section('content')

<div class="row m-0 mb-2" style="position: relative;top: 86px;left: 6%;">
    <div class="col p-0">
      <div class="text-bold font-20">Perencanaan Pelatihan</div>
    </div>
   <div class="input-group md-form form-sm form-1 pl-0"style="position:absolute;left: 67%;top:-2px;">
  <div class="input-group-prepend">
    <span class="input-group-text bg-success lighten-2" id="basic-text1"><i class="fa fa-search text-white"
        aria-hidden="true"></i></span>
  </div>
  <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search" style="max-width:238px; ">
</div>
  </div>

<section class="details-card">
    <div class="container">
        <div class="row">
            @php($perencanaans=App\Perencanaan_kajian_pelatihan::where('jenis_perencanaan','Pelatihan')->paginate(6))
            @foreach($perencanaans as $perencanaanpelatihan)
            <div class="col-md-4 mb-5">
                <div class="card-content">
                    <div class="thumb-img">
                        <img src="{{asset('images/User')}}/{{$perencanaanpelatihan->user->gambar}}" alt="">
                    </div>
                    <div class="card-desc">
                        <h4>{{$perencanaanpelatihan->judul_perencanaan}}</h4>
                        <p><em>Username pengurus : {{$perencanaanpelatihan->user->name}}</em></p>
                        <p><em>Tanggal Pelaksanaan : {{date('d',strtotime($perencanaanpelatihan->tanggal_pelaksanaan))}}</em></p>
                        <p><em>Bulan Pelaksanaan : {{date('M',strtotime($perencanaanpelatihan->tanggal_pelaksanaan))}}</em></p>
                        <p><em>Nama Pemateri : {{$perencanaanpelatihan->ustadz}}</em></p>
                        <p><em>Biaya Pelaksaan(dll): {!!$perencanaanpelatihan->biaya_pelaksanaan!!}</em></p>
                        <a href="{{url('/detail/perencanaan/pelatihan',$perencanaanpelatihan->id)}}" class="btn-card">Read More</a> 
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
 @if(Auth::user())
       <a href="{{url('/tambah/perencanaan/pelatihan')}}" style="position: relative;
    left: 40%; bottom: 891px;" class="btn btn-app">Tambah perencanaan pelatihan</a>
    @endif
 {{$perencanaans->links()}}
@endsection
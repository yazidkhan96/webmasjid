@extends('master.master_main')
@section('content')

<div class="container marketing" style="position: relative;top: 58px;">
    @if(Auth::user())
    <div class="col p-0">
       <a href="{{url('/tambah_pelatihan')}}" class="btn btn-primary" style="position: absolute;right: 1px;top: 34px;padding: 6px 28px;">Tambah Jadwal pelatihan</a>
    </div>
    @endif

  <div class="row m-0 mb-5">
    <div class="col p-0">
      <div class="text-bold font-20">Jadwal Pelatihan</div>
    </div>
   <div class="input-group md-form form-sm form-1 pl-0"style="position:absolute;left: 76%;top:-2px;">
  <div class="input-group-prepend">
    <span class="input-group-text bg-success lighten-2" id="basic-text1"><i class="fa fa-search text-white"
        aria-hidden="true"></i></span>
  </div>
  <input class="form-control my-0 py-1" type="text" placeholder="Search" aria-label="Search" style="max-width:238px; ">
</div>
  </div>
  <div class="row">
    @foreach(App\Pelatihan::take(10)->get() as $pelatihan)
    <div class="col-md-3 col-6 mb-4" >
    <a href="{{url('/detail_jadwal_pelatihan',$pelatihan->id)}}" style="text-decoration: none;">
        <div class="thumb-img">
        <img  src="{{asset('images/Pelatihan')}}/{{$pelatihan->gambar}}" alt="Card image cap">

        </div>
          <div class="thumb-tittle">{{$pelatihan->judul_pelatihan}}</div>
          <!-- Text -->
          <div class="thumb-desc">
            <p class="">{!!$pelatihan->deskripsi!!} <br>
              Nama pemateri : {{$pelatihan->nama_pemateri}}<br>
              No Pengurus : {{$pelatihan->nohp}}
            </p>
          </div>
          <!-- Button -->
    </a>      
    
      <!-- Card -->
      </div><!-- /.col-lg-4 -->
        @endforeach

    </div>
  </div>
@endsection
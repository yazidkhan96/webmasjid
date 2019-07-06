@extends('master.master_main')
@section('content')
<div class="container marketing" style="position: relative;top: 58px;">
  <div class="row m-0 mb-2">
    <div class="col p-0">
      <div class="text-bold font-20">Profile Masjid</div>
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
    @php($page=10)
    @foreach(App\Masjid::paginate($page) as $masjid)
    <div class="col-md-3 col-6 mb-4">      
      <a href="{{url('/detail/masjid',$masjid->id)}}" style="text-decoration: none;">
        <div class="thumb-img">
        <img class="" src="{{asset('images/Masjid')}}/{{$masjid->gambar}}" alt="Card image cap">

        </div>
          <div class="thumb-tittle">{{$masjid->nama_masjid}}</div>
          <!-- Text -->
          <div class="thumb-desc">
           {!!$masjid->deskripsi!!}
          </div>
          <!-- Button -->
        </a>
    
      <!-- Card -->
      </div><!-- /.col-lg-4 -->
        @endforeach
    </div>
  </div>
  {{App\Masjid::paginate($page)->links()}}
@endsection
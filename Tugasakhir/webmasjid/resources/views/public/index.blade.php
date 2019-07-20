@extends('master.master_main')
@section('content')
<!-- Search -->
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    @foreach(App\Slider::all() as $i=>$slider)
    <li data-target="#carousel-example-1z" data-slide-to="{{$i}}" class="{{$i==0?'active':''}}"></li>
    @endforeach
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    @foreach(App\Slider::all() as $i=>$slider)
    <!--First slide-->
    <div class="carousel-item {{$i==0?'active':''}}">
      <img class="d-block w-100" src="{{asset('images/Slider')}}/{{$slider->gambar}}" 
      alt="First slide" style="width:133% !important; height:500px !important; ">
    </div>
    <!--/First slide-->
    @endforeach
  </div>
  <!--/.Slides-->
  <!--Controls-->
  <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
  <!--/.Controls-->
</div>
<!--/.Carousel Wrapper-->
<!-- End Slider -->
<!-- Marketing messaging and featurettes
================================================== -->
<!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing" style="position: absolute;left: 6%;top: 625px;">
  <div class="row m-0 mb-2">
    <div class="col p-0">
      <div class="text-bold font-20">Profile Masjid</div>
    </div>
    <div class="col p-0 text-right">
      <a href="{{url('profile_masjid')}}" class="btn btn-app">Lihat Semua</a>
    </div>
  </div>

  <div class="row">
    @foreach(App\Masjid::take(10)->get() as $masjid)
    <div class="col-md-3 col-6 mb-4">      
        <div class="thumb-img">
        <img class="" src="{{asset('images/Masjid')}}/{{$masjid->gambar}}" alt="Card image cap">

        </div>
          <div class="thumb-tittle">{{$masjid->nama_masjid}}</div>
          <!-- Text -->
          <div class="thumb-desc">
          {!!$masjid->deskripsi!!}
          </div>
          <!-- Button -->
    
      <!-- Card -->
      </div><!-- /.col-lg-4 -->
     @endforeach
    </div>

                                            <!-- PISAH -->


    <div class="row m-0 mb-2">
    <div class="col p-0">
      <div class="text-bold font-20">Pelatihan</div>
    </div>
    <div class="col p-0 text-right">
      <a href="{{url('jadwal_pelatihan')}}" class="btn btn-app">Lihat Semua</a>
    </div>
  </div>

  <div class="row">
    @foreach(App\Pelatihan::take(10)->get() as $pelatihan)
    <div class="col-md-3 col-6 mb-4">      
        <div class="thumb-img">
        <img class="" src="{{asset('images/Pelatihan')}}/{{$pelatihan->gambar}}" alt="Card image cap">
        </div>
          <div class="thumb-tittle">{{$pelatihan->judul_pelatihan}}</div>
          <!-- Text -->
          <div class="thumb-desc">
         {!!$pelatihan->deskripsi!!}
          </div>
          <!-- Button -->
    
      <!-- Card -->
      </div><!-- /.col-lg-4 -->
    @endforeach
    </div>
</div>

      
      
      <!-- FOOTER -->
      <footer class="container ft">
        
      </footer>
    </main>
   
    @endsection
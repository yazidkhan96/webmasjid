@extends('master.master_main')
@section('content')
<!-- Search -->
<!--Carousel Wrapper-->
<div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
  <!--Indicators-->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-1z" data-slide-to="1"></li>
    <li data-target="#carousel-example-1z" data-slide-to="2"></li>
  </ol>
  <!--/.Indicators-->
  <!--Slides-->
  <div class="carousel-inner" role="listbox">
    <!--First slide-->
    <div class="carousel-item active">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(130).jpg"
      alt="First slide">
    </div>
    <!--/First slide-->
    <!--Second slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(129).jpg"
      alt="Second slide">
    </div>
    <!--/Second slide-->
    <!--Third slide-->
    <div class="carousel-item">
      <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(70).jpg"
      alt="Third slide">
    </div>
    <!--/Third slide-->
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
    @for($i=0;$i<4;$i++)
    <div class="col-md-3 col-6 mb-4">      
        <div class="thumb-img">
        <img class="" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

        </div>
          <div class="thumb-tittle">Judul</div>
          <!-- Text -->
          <div class="thumb-desc">
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum...
          lorem</p>
          </div>
          <!-- Button -->
    
      <!-- Card -->
      </div><!-- /.col-lg-4 -->
        @endfor
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
    @for($i=0;$i<4;$i++)
    <div class="col-md-3 col-6 mb-4">      
        <div class="thumb-img">
        <img class="" src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" alt="Card image cap">

        </div>
          <div class="thumb-tittle">Judul</div>
          <!-- Text -->
          <div class="thumb-desc">
          <p class="">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
          tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
          quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
          consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
          cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
          proident, sunt in culpa qui officia deserunt mollit anim id est laborum...
          lorem</p>
          </div>
          <!-- Button -->
    
      <!-- Card -->
      </div><!-- /.col-lg-4 -->
        @endfor
    </div>
</div>

      
      
      <!-- FOOTER -->
      <footer class="container ft">
        
      </footer>
    </main>
   
    @endsection
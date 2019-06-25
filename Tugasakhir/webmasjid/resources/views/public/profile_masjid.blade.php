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
    @for($i=0;$i<11;$i++)
    <div class="col-md-3 col-6 mb-4">      
      <a href="{{url('/detail_masjid',$i)}}" style="text-decoration: none;">
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
        </a>
    
      <!-- Card -->
      </div><!-- /.col-lg-4 -->
        @endfor
    </div>
  </div>
@endsection
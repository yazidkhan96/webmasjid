@extends('master.master_main')
@section('content')
<div class="container py-3">
  <!-- Card Start -->
  <div class="card" style="position: relative; top: 90px;">
    <div class="row ">
      <img src="{{asset('images/User')}}/{{$perencanaanpelatihan->user->gambar}}" alt="">
      <div class="col-md-7 px-3">
        <div class="card-block px-6">
          <h4 class="card-title"></h4>
          <p class="card-text">
                 <p><em>Username pengurus :{{$perencanaanpelatihan->user->name}}</em></p>
                 <p><em>Nama Masjid : {{$perencanaanpelatihan->lokasi}}</em></p>
                 <p><em>Tanggal Pelaksanaan : {{$perencanaanpelatihan->tanggal_pelaksanaan}}</em></p>
                 <p><em>Judul Pelatihan :{{$perencanaanpelatihan->judul_perencanaan}}</em></p>
                 <p><em>Nama Pemateri :{{$perencanaanpelatihan->ustadz}}</em></p>
                 <p><em>Biaya Pelaksaan(dll) : {!!$perencanaanpelatihan->biaya_pelaksanaan!!}</em></p>
          </p>
          <br>
        </div>
      </div>
      <!-- Carousel start -->
        </div>
  </div>
  <!-- End of card -->


<!-- <div class="link-group">
        <strong>Ingin bergabung dengan pengurus lain?</strong><br>
        <em>Klik link dibawah ini</em>
        <div class="arrow">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        <a href="https://api.whatsapp.com/send?phone=51955081075&text=Hola%21%20Quisiera%20m%C3%A1s%20informaci%C3%B3n%20sobre%20Varela%202." class="float-link" target="_blank"><i class="fa fa-whatsapp my-float"></i>
        </a>
      </div> -->


@endsection
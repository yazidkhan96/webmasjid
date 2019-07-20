<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top nvb">
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/')}}" >Home</a>
        </li>
         <li class="nav-item active">
          <a class="nav-link" href="{{url('/forum')}}" >Forum Pengurus</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{url('/profile_masjid')}}" >Profile Masjid</a>
        </li>
        <li class="nav-item active">
          <div class="dropdown">
            <button class="btn  dropdown-toggle jdk nvb" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
            Kajian
            </button>
            <div class="dropdown-menu text-nav" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item btn-drpd" type="button"><a
              href="{{url('/jadwal_kajian')}}">Jadwal Kajian</a></button>
              <button class="dropdown-item btn-drpd" type="button"><a
              href="{{url('/perencanaan_kajian')}}">Perencanaan kajian</a></button>
              <button class="dropdown-item btn-drpd" type="button"><a
              href="{{url('/request_kajian')}}">Request kajian</a></button>
            </div>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link active text-center" href="{{url('/donasi')}}">Donasi</a>
        </li>
        <li class="nav-item active">
          <div class="dropdown">
            <button class="btn dropdown-toggle jdk nvb" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zakat</button>
            <div class="dropdown-menu text-nav" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item btn-drpd" type="button" ><a
              href="{{url('/zakat_profesi')}}">Zakat Profesi</a></button>
              <button class="dropdown-item btn-drpd" type="button"><a
              href="{{url('/zakat_maal')}}">Zakat Maal</a></button>
              <button class="dropdown-item btn-drpd" type="button"><a
              href="{{url('/zakat_fitrah')}}">Zakat fitrah</a></button>
            </div>
          </div>
          
        </li>
        <li class="nav-item active">
          <div class="dropdown">
            <button class="btn dropdown-toggle jdk nvb" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pelatihan</button>
            <div class="dropdown-menu text-nav" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item btn-drpd" type="button" ><a
              href="{{url('/jadwal_pelatihan')}}">Jadwal Pelatihan</a></button>
              <button class="dropdown-item btn-drpd" type="button"><a
              href="{{url('/perencanaan_pelatihan')}}">Perencanaan pelatihan</a></button> <button class="dropdown-item btn-drpd" type="button"><a
            href="{{url('/request_pelatihan')}}">Request pelatihan</a></button>
          </div>
        </div>
        <li class="nav-item active">
          <div class="dropdown">
            <button class="btn dropdown-toggle jdk nvb" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Laporan
            </button>
            <div class="dropdown-menu text-nav" aria-labelledby="dropdownMenu2">
              <button class="dropdown-item btn-drpd" type="button"><a
              href="{{url('/laporan_donasi')}}">Laporan donasi</a></button>
              <button class="dropdown-item btn-drpd" type="button"><a
              href="{{url('/laporan_zakat')}}">Laporan zakat</a></button>
            </div>
          </div>

        </li>
        <li class="nav-item active">
          <div class="form-inline mt-2 mt-md-0">
            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search" id="search">
            <button id="searchsubmit"><i class="fa fa-search"></i></button>
            @if(!Auth::user())
            <a class="" href="{{url('/login')}}" style="position: relative;left: 123%;color: white;">Login</a>
            <!-- pisah -->
            @else
            @php($user=Auth::user())
            <div class="dropdown show">
              <a class="nav-link active pgr dropdown-toggle" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#" style="    position: relative;
                left: 21rem;"><i class="fa fa-bars" style="font-size: 25px;
              " ></i></a>
              <div class="dropdown-menu" aria-labelledby="dropdownMenuLink" style="margin-left: 5rem;">
                <div> 
                <div class="card" style="width: 18rem;">
                  <div class="card-header">
                    <figure class="user-profile">

                      <img src="{{asset('images/user')}}/{{$user->gambar}}" style="height: auto; line-height: normal; width: 63px; float: left; object-fit: cover;">
                      <figcaption style="position: relative;left: 12px; top: 7px;">
                      <strong>{{$user->name}}</strong><br>
                      <small>{{$user->email}}</small>
                      </figcaption>
                    </figure>
                  </div>
                  <ul class="list-group list-group-flush">
                    <div>
                      <a href="{{url('/dashboard_user')}}" class="btn btn-danger btn-lg btn-block" style="color:  white;" >
                        <strong>Dashboard</strong>
                      </a>
                    </div>
                    <div>
                      <a href="/user/logout" class="btn btn-primary  btn-lg btn-block" style="color: white;" >
                        <strong><i class="fa fa-sign-out"></i>Keluar</strong>
                      </a>
                    </div>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          @endif
          </li>
        </div>
      </ul>
    </div>
  </nav>
</header>
<script type="text/javascript">
  $('#searchsubmit').on('click',function () {
    let key=$('#search').val();
    location.href=`/search/masjid?key=${key}`;

  })
</script>
@extends('master.master_main')
@section('content')

<div class="container marketing" style="position: relative;left:-5%; top:46px;">
    @if(Auth::user())
    <div class="col p-0">
       <a href="{{url('/tambah_pelatihan')}}" class="btn btn-app" style="position: absolute;left:-1px;top: 34px;padding: 6px 28px;">Tambah Jadwal pelatihan</a>
    </div>
    @endif

  <div class="row m-0 mb-5">
    <div class="col p-0">
      <div class="text-bold font-20">Jadwal Pelatihan</div>
    </div>
</div>
  <div class="row">
    @foreach(App\Pelatihan::take(10)->get() as $pelatihan)
    <div class="col-md-3 col-6 mb-4" >
    <a href="{{url('/detail_jadwal_pelatihan',$pelatihan->id)}}" style="text-decoration: none;">
        <div class="thumb-img">
        <img  src="{{asset('images/Pelatihan')}}/{{explode(',',$pelatihan->gambar)[0]}}" alt="Card image cap">

        </div>
          <div class="thumb-tittle">{{$pelatihan->judul_pelatihan}}</div>
          <!-- Text -->
          <div class="thumb-desc">
            <p class="">{!!$pelatihan->deskripsi!!} <br>
              Nama pemateri : {{$pelatihan->nama_pemateri}}<br>
              No Pengurus : {{$pelatihan->nohp}}
            </p>
          </div>
    </a>      
    
      </div>
      @endforeach

    </div>
  </div>

<div class="">
        <select class="form-control" id="bataswaktu"  style="max-width: 13rem; position:absolute; left:  80%; top:  112px;">
          <option hidden="">--Urutkan berdasarkan--</option>
          <option>A-Z</option>
          <option>Z-A</option>
          <option>120 hari</option>
        </select>
      </div>
  <script type="text/javascript">
  $('#searchpelatihan').on('click',function () {
    alert();
    let key=$('#search').val();
    location.href=`/search/pelatihan?key=${key}`;
  })
</script>
@endsection
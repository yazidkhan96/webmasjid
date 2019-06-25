@extends('master.master_main')
@section('content')
<div class="row m-0 mb-2" style="position: relative;top: 86px;left: 6%;">
    <div class="col p-0">
      <div class="text-bold font-20">Perencanaan Kajian</div>
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
        	@for($i=0;$i<10;$i++)
            <div class="col-md-4 mb-5">
                <div class="card-content">
                    <div class="card-img">
                        <img src="https://placeimg.com/380/230/nature" alt="">
                    </div>
                    <div class="card-desc">
                        <h4>Kajian Musyawarrah-Al jihad</h4>
                        <p><em>Username pengurus :</em></p>
                        <p><em>Nama Masjid :</em></p>
                        <p><em>Tanggal Pelaksanaan :</em></p>
                        <p><em>Nama Ustadz :</em></p>
                        <p><em>Kerperluan biaya transport dll :</em></p>
						<a href="{{url('/detail/perencanaan/kajian')}}" class="btn-card">Read More</a>   
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div>
</section>
@endsection
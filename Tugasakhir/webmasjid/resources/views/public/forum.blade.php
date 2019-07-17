@extends('master.master_main')
@section('content')

<div class="row m-0 mb-2">
    <div class="col p-0">
      <div class="text-bold font-20" style="position: absolute;left: 54px;
      top: 91px;">Forum Pengurus</div>
    </div>
 </div>
<div class="container">
	<div class="row">  
	@foreach(App\Forum::take(10)->get() as $forum) 
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
	<a href="{{url('/detail_forum',$forum->id)}}" style="text-decoration: none !important;">
			<table class="table table-striped" style="position: relative;top: 127px; right: 29px;">
	          <tbody> 	
	           <tr>
	            <td ><strong>{{$forum->judul_forum}}</strong><br>
	            <div class="desc-elip">
	            	<span>{!!$forum->deskripsi!!}</span>
	            </div>
	            </td>
	            <td>Username
	            	<span>{{$forum->created_at}}</span></td>
	          	</tr>
	       	 </tbody>
	      	</table>
    	 </a>
    	 </div>
    	 @endforeach
    </div>
  </div>
    <!-- <div class="col p-0 text-right">
      <a href="{{url('tambah_forum')}}" class="btn btn-app" style="position: relative;right: 120px;top: -132px;">Tambah Forum baru</a>
    </div>		 -->
      

@endsection
@extends('master.master_main')
@section('content')

<div class="row m-0 mb-2" style="position: relative;top: 4rem;">
    <div class="col p-0">
      <div class="text-bold font-20" style="position: absolute;left: 53px;
      top: 63px;">Forum Pengurus</div>
    </div>
    <div class="col p-0 text-right">
      <a href="{{url('tambah_forum')}}" class="btn btn-app" style="position: relative;right: 120px;top: 55px;">Tambah Forum baru</a>
    </div>
 </div>
<div class="container">
	<div class="row">  
	@foreach(App\Forum::take(10)->get() as $forum) 
		<a href="{{url('/detail_forum',$forum->id)}}" style="text-decoration: none !important;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<table class="table table-striped" style="position: relative;top: 127px; right: 29px;">
	          <tbody> 	
	           <tr class="active" >
	            <td ><strong>{{$forum->judul_forum}}</strong><br>
	            	<div class="desc-elip">
	            	<span>{!!$forum->deskripsi!!}<span>
	            </td>

	            <td>Username<br>
	            	<span>{{$forum->created_at}}</span></td>
	          	</tr>
	       	 </tbody>
	      	</table>
    	 </div>
    	 @endforeach
    	 </a>
    </div>

  </div>
		
      

@endsection
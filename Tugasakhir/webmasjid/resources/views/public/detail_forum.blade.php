@extends('master.master_main')
@section('content')
<div class="container-app">
	<div class="row m-0 mt-3">
		<div class="col-md-8 col-lg-9 col-12 p-0">
			<div class="section-app">
				<div class="row m-0 border-bottom">
					<div class="col p-0" style="margin-top: 31px;"> 
						<img src="{{asset('images/Forum')}}/{{$forum->gambar}}" style="    width: 127% !important;max-height: 100% !important;">
					</div>
				</div>
				<div class="col p-0">
					<div class="title-section-app pb-1">{{$forum->judul_forum}}</div>
				</div>
				<div class="font-14 mt-3">
					{!!$forum->deskripsi!!}
				</div>
			</div>
		</div>
	<div class="card card-inner mb-4" style="border: 0px solid rgba(0,0,0,.125) !important;
    border-radius: 2.25rem !important;">
	    <form action="{{url('/forum/reply/comment')}}" method="post">	
	    	<input type="hidden" name="_token" value="{{csrf_token()}}">
	    	<input type="hidden" name="forum_id" value="{{$forum->id}}">
	    	
    	    <div class="card-body">
    	        <div class="row">
            	    <div class="col-md-2">
            	        <img src="{{asset('img/avatar.png')}}" class="img img-rounded img-fluid"/>
            	    </div>
            	    <div class="col-md-10">
            	        <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong></strong></a></p>
            	        <textarea rows="5" cols="120" name="message" ></textarea>
            	        <p>
            	            <button class="float-right btn btn-primary ml-2"  style="color: white;">Reply <i class="fa fa-arrow-right"></i> </button> 
            	            
            	       </p>
            	    </div>
    	        </div>
    	    </div>
		</form>
	</div>
 </div>
</div>
	@foreach(App\ChatForum::where('forum_id',$forum->id) ->whereNull('chat_forum_id')->get() as $chat)
		<div class="card parentNode mb-4" style="border: 4px solid rgba(0,0,0,.125) !important;border-radius: 2.25rem !important;">
		    <div class="card-body">
		        <div class="row">
	        	    <div class="col-md-2">
	        	        <img src="{{asset('img/avatar.png')}}" class="img img-rounded img-fluid"/>
	        	    </div>
	        	    <div class="col-md-10">
	        	    	 <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>{{$chat->user->name}}</strong></a></p>
	        	       <div class="clearfix"></div>
	        	        {{$chat->message}}
	        	        <p>
	        	            <a class="float-right btn btn-outline-primary ml-2 reply-msg" id="{{$chat->id}}"> <i class="fa fa-reply"></i> Reply</a>
	        	       </p>
	        	    </div>
		        </div>   	
		    </div>
		    @foreach($chat->replied as $replied)
    		<div class="card card-inner mt-2 mb-2 " style="margin-left: 50px; width: 84%; border: 1px solid rgba(0,0,0,.125);border-radius: 2.25rem;">
        	   <div class="card-body" >
        	        <div class="row">
                	    <div class="col-md-2">
                	        <img src="{{asset('img/avatar.png')}}" class="img img-rounded img-fluid"/>
                	    </div>
                	    <div class="col-md-10">
                	        <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>{{$replied->user->name}}</strong></a></p>
                	        <p>
                	        	{{$replied->message}}
                	        </p>
                	        <p>
                	            <a class="float-right btn btn-outline-primary ml-2 replay-2" data-id="{{$chat->id}}" data-name="{{$replied->user->name}}">  <i class="fa fa-reply"></i> Reply</a> 
                	       </p>
                	    </div>
        	        </div>
        	    </div>
            </div>
		    @endforeach
			<div class="card card-inner hidden my-comment" id="box-jawab-{{$chat->id}}">
			    <form action="{{url('/forum/reply/comment')}}" method="post">	
			    	<input type="hidden" name="_token" value="{{csrf_token()}}">
			    	<input type="hidden" name="forum_id" value="{{$forum->id}}">
			    	<input type="hidden" name="chat_forum_id" value="{{$chat->id}}">
			    	
		    	    <div class="card-body">
		    	        <div class="row">
		            	    <div class="col-md-2">
		            	        <img src="{{asset('img/avatar.png')}}" class="img img-rounded img-fluid"/>
		            	    </div>
		            	    <div class="col-md-10">
		            	        <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong></strong></a></p>
		            	        <textarea rows="5" cols="120" name="message" id="message-{{$chat->id}}"></textarea>
		            	        <p>
		            	            <button class="float-right btn btn-primary ml-2"  style="color: white;">Reply <i class="fa fa-arrow-right"></i> </button> 
		            	             <a class="float-right btn btn-primary ml-2 clearforum"  style="color: white;" data-id="{{$chat->id}}" >Cancel  <i class="fa fa-window-close"></i> </a>   
		            	       </p>
		            	    </div>
		    	        </div>
		    	    </div>
				</form>
			</div>
		</div>
	@endforeach

	</div>
<script type="text/javascript">
	/*document.getElementById('end_page').scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});*/
	$('.replay-2').click(function () {
		console.log('ini dalam')
		let id_box;
		 	id_box=$(this).attr('data-id');
		 let name=$(this).attr('data-name');
		let box=$('#box-jawab-'+id_box).removeClass('hidden');
		document.getElementById('box-jawab-'+id_box).scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
		console.log(name);
		$('#message-'+id_box).val('@'+name+':');
	})
	$('.reply-msg').on('click',function () {
		console.log('ini luar')
		let id_box;
		 	id_box=$(this).attr('id');
		let box=$('#box-jawab-'+id_box).removeClass('hidden');
		document.getElementById('box-jawab-'+id_box).scrollIntoView({behavior: "smooth", block: "end", inline: "nearest"});
	})
	$('.clearforum').on('click',function () {
		let id_box;
		 	id_box=$(this).attr('data-id');
		let box=$('#box-jawab-'+id_box).addClass('hidden');
	})
	
</script>
@endsection



	
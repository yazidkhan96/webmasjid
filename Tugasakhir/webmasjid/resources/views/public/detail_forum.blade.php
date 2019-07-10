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
		
	</div>
	@foreach(App\ChatForum::where('forum_id',$forum->id)->get() as $chat)
		<div class="card parentNode">
		    <div class="card-body">
		        <div class="row">
	        	    <div class="col-md-2">
	        	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
	        	    </div>
	        	    <div class="col-md-10">
	        	       <div class="clearfix"></div>
	        	        {{$chat->message}}
	        	        <p>
	        	            <a class="float-right btn btn-outline-primary ml-2 reply-msg" id="{{$chat->id}}"> <i class="fa fa-reply"></i> Reply</a>
	        	           
	        	       </p>
	        	    </div>
		        </div>   	
		    </div>
    		<div class="card card-inner " style="margin-left: 50px;">
        	    <div class="card-body">
        	        <div class="row">
                	    <div class="col-md-2">
                	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
                	    </div>
                	    <div class="col-md-10">
                	        <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong>username</strong></a></p>
                	        <p></p>
                	        <p>
                	            <a class="float-right btn btn-outline-primary ml-2">  <i class="fa fa-reply"></i> Reply</a> 
                	       </p>
                	    </div>
        	        </div>
        	    </div>
            </div>
			<div class="card card-inner hidden" id="box-jawab-{{$chat->id}}">
			    <form action="{{url('/forum/reply/comment',$chat->id)}}" method="post">	
			    	<input type="hidden" name="_token" value="{{csrf_token()}}">
			    	<input type="hidden" name="forum_id" value="{{$forum->id}}">
			    	
		    	    <div class="card-body">
		    	        <div class="row">
		            	    <div class="col-md-2">
		            	        <img src="https://image.ibb.co/jw55Ex/def_face.jpg" class="img img-rounded img-fluid"/>
		            	    </div>
		            	    <div class="col-md-10">
		            	        <p><a href="https://maniruzzaman-akash.blogspot.com/p/contact.html"><strong></strong></a></p>
		            	        <textarea rows="5" cols="120" name="message"></textarea>
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
	$('.reply-msg').on('click',function () {
		let id_box;
		 	id_box=$(this).attr('id');
		let box=$('#box-jawab-'+id_box).removeClass('hidden');
	})
	$('.clearforum').on('click',function () {
		let id_box;
		 	id_box=$(this).attr('data-id');
		let box=$('#box-jawab-'+id_box).addClass('hidden');
	})
	var value_rate = 0;
	var dataUlasan = [];
	$('.ratex').on('mouseover',function () {
		$('.ratex').each(function () {
			$(this).text('radio_button_unchecked');
		});
		var value= parseInt($(this).attr('data'));
		for(var i = 1; i <= value; i++){
			$('#rate'+i).text('radio_button_checked');
		}
	});
	$('.ratex').on('mouseleave',function () {
		$('.ratex').each(function () {
			$(this).text('radio_button_unchecked');
		});
		for(var i = 1; i <= value_rate; i++){
			$('#rate'+i).text('radio_button_checked');
		}
	});
	$('.ratex').click(function () {
		value_rate = parseInt($(this).attr('data'));
		for(var i = 1; i <= value_rate; i++){
			$('#rate'+i).text('radio_button_checked');
		}
	})

	$('#sendUlasan').click(function () {
		if( value_rate == 0){
			alert('rate tidak boleh kosong')
		}
		else if($('#formUlasan').val() == ''){
			alert('Kolom ulasan tidak boleh kosong')
		}
		else{
			dataUlasan = {
				'user_id':$('#user_id').val(),
				'rate':value_rate,
				'ulasan':$('#formUlasan').val()
			}
			console.log(dataUlasan);
			var id_wisata=$('#wisata_id').val();
			$.ajax({
			  url: "/api/user/update/ulasan/"+id_wisata,
			  type: "POST",
			  data:  dataUlasan, 
			  success:function(data){
			    console.log(data,"ini");
			    location.reload();
			  }
			});
		}
	})
</script>
@endsection



	
@extends('master.master_main')
@section('content')
<div class="container" style="position: relative; right: 170px; top: 18px;">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-6">
			<div id="postlist">
				<div class="panel">
					<div class="panel-heading">
						<div class="text-center">
							<div class="row">
								<div class="col-sm-9">
									<h3 class="pull-left" style="margin-bottom: 14px;">Air tak selalu Jernih</h3>
								</div>
							</div>
						</div>
					</div>
					
				<div class="panel-body">
					<a href="#" class="thumbnail">
					   <img alt="Image" src="{{asset('/img/air.jpg')}}" style="height:212px;width:98%;">
						</a>
					<div class="deskripsi-forum" style="position: relative;left: 100%;bottom: 183px;">
							<em>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation...</em>
					  </div>
				</div>
					
				</div>
			</div>
			<div class="text-center">
				<a href="{{url('/detail_forum')}}" class="btn btn-primary" style="color: white;color: white;position: relative;left: 132%;bottom: 125px;">Detail...</a>
			</div>
		</div>
	</div>
</div>

@endsection
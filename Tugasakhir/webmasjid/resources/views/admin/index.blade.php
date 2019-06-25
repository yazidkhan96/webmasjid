@extends('master.master_admin')
@section('content')

<div>
	<div class="title-admin">Dashboard</div>
	<div class="content-admin">
		<div class="row">
			<div class="col-3">
				<a href="{{url('/admin/user')}}">
					<div class="col-dashboard">
						<div class="col p-0">
							<div class="icon-dashboard"><i class="material-icons">assignment_ind</i></div>
							<div class="row m-0 mt-2 font-20">
								<div class="col p-0">User</div>
								<div class="col p-0 text-right">
									<div class="count-dashboard"></div>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-3">
				<a href="{{url('/admin/wisata')}}">
					<div class="col-dashboard">
						<div class="col p-0">
							<div class="icon-dashboard"><i class="material-icons">domain</i></div>
							<div class="row m-0 mt-2 font-20">
								<div class="col p-0">Profile Masjid</div>
								<div class="col p-0 text-right">
									<div class="count-dashboard"></div>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-3">
				<a href="{{url('/admin/akomodasi')}}">
					<div class="col-dashboard">
						<div class="col p-0">
							<div class="icon-dashboard"><i class="material-icons">hotel</i></div>
							<div class="row m-0 mt-2 font-20">
								<div class="col p-0">Forum</div>
								<div class="col p-0 text-right">
									<div class="count-dashboard"></div>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
			<div class="col-3">
				<a href="{{url('/admin/budaya')}}">
					<div class="col-dashboard">
						<div class="col p-0">
							<div class="icon-dashboard"><i class="material-icons">local_library</i></div>
							<div class="row m-0 mt-2 font-20">
								<div class="col p-0">Zakat</div>
								<div class="col p-0 text-right">
									<div class="count-dashboard"></div>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
		<div class="row mt-5">
			
			<div class="col-3">
				<a href="{{url('/admin/slider')}}">
					<div class="col-dashboard mb-5">
						<div class="col p-0">
							<div class="icon-dashboard"><i class="material-icons">info</i></div>
							<div class="row m-0 mt-2 font-20">
								<div class="col p-0">Slider</div>
								<div class="col p-0 text-right">
									<div class="count-dashboard"></div>
								</div>
							</div>
						</div>
					</div>	
				</a>
				<a href="{{url('/admin/ulasan')}}">
					<div class="col-dashboard">
						<div class="col p-0">
							<div class="icon-dashboard"><i class="material-icons">grade</i></div>
							<div class="row m-0 mt-2 font-20">
								<div class="col p-0">Ulasan</div>
								<div class="col p-0 text-right">
									<div class="count-dashboard"></div>
								</div>
							</div>
						</div>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
@endsection
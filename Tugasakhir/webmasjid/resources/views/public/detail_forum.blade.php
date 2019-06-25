@extends('master.master_main')
@section('content')
<div class="mt-3">
	<div class="container">
		<div class="row">
			<div>
				<p>
					<img src="{{asset('/img/msj1.jpg')}}" alt="" style="float: left; height:  25rem; margin-right: 29px;">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis rerum ipsam iste sit, adipisci voluptas quae sapiente neque est, corporis temporibus dolorum nihil consectetur nobis excepturi veritatis eos, beatae molestias.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate totam iure suscipit nam ipsa vel eaque illo rem eum, fuga aut eligendi, debitis voluptates fugiat eius, voluptate hic labore sed.
					Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium sunt sed alias incidunt praesentium! Temporibus, aspernatur, illum autem facere, repudiandae placeat corrupti expedita consequatur modi, consectetur distinctio excepturi a cupiditate!
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
		</div>
		<form>
			<div class="form-group">
				<label for="comment">Comment:</label>
				<textarea class="form-control" rows="5" id="comment"></textarea>
			</div>
		</form>
		<button class="btn btn-primary btn-lg" style="margin-left: 86%;padding: 5px 60px;position: relative; bottom: -17px;">Kirim</button>
	</div>
</div>
<div class="card" style="width: 88%; margin-left: 5rem; bottom: -4rem;">
  <ul class="list-group list-group-flush">
	    <li class="list-group-item">
	    	<img src="{{asset('/img/msj1.jpg')}}" style="width: 41px; height: 39px;">
	    	<em>Username</em>
	    </li>
	    <li class="list-group-item">
	    	<textarea class="form-control" rows="3" disabled=""></textarea>
	    </li>
	    <li class="list-group-item">
	    	 <a href=""><strong>Edit</strong></a> 
	    	 <a href=""><strong>Delete</strong></a>
	    </li>
    </ul>
</div>
@endsection
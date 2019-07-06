@extends('master.master_main')
@section('content')
<div class="card" style="width: 18rem; background-color: rgba(48,173,76,1);position: relative;
	top: 9rem;left: 5rem;">
	<img class="card-img-top rounded-circle" src="{{asset('/img/user-profile.jpg')}}" alt="Card image cap" style="height: 70px;width: 70px; position: relative; top: 20px; left: 33%; z-index: 1; border: 5px solid #fff;">
	<div class="card-body">
		<h5 class="card-title" style="margin-left: 4rem; color: white;">username</h5>
	</div>
	<ul class="list-group list-group-flush">
		<li class="list-group-item">
			<div class="container dashboard">
				<a data-toggle="collapse" data-target="#demo" style="margin-left: -27px;">Akun saya</a><br>
				<div id="demo" class="collapse" style="margin-left: -15px;">
					<ul style="list-style-type:none;" class="list-group list-group-flush">
						<li><a href="">Ubah password</a></li>
						<li><a href="">Ubah foto profil</a></li>
					</ul>
				</div>
			</div>
		</li>
		<li class="list-group-item">
			<div class="container dashboard">
				<a data-toggle="collapse" data-target="#demo1" style="margin-left: -27px;">Galang dana</a><br>
				<div id="demo1" class="collapse" style="margin-left: -15px;">
					<ul style="list-style-type:none;" class="list-group list-group-flush">
						<li><a href="">Ubah foto</a></li>
						<li><a href="">Ubah deskripsi</a></li>
						<li><a href="">Ubah batas waktu</a></li>
					</ul>
				</div>
			</div>
		</li>
		<li class="list-group-item">Pencairan dana</li>
	</ul>
</div>
<!-- <div class="container">
	<h3 style="positior: nrelative; bottom: 11rem; left: 317px; margin-top: 2rem;">Ubah Passwod</h3>
	<hr style="border: 1px solid grey;width: 59%;position: relative;left: 5rem;bottom: 12rem;">
		<div class="form-group" style="position: relative;left: 314px;bottom: 194px;">
				Password lama :<input type="text" class="form-control " name="" required="" style="    width: 600px;position: relative;bottom: 25px;left: 121px;">
			</div>
	<div class="form-group" style="position: relative;left: 314px;bottom: 194px;">
		Password baru : <input type="password" class="form-control" required="" style="width: 600px; position:relative;bottom: 25px; left: 121px;">
	</div>
	<div class="form-group" style="position: relative;left: 314px;bottom: 194px;">
		Password baru : <input type="password" class="form-control" required="" style="width: 600px; position:relative;bottom: 25px; left: 121px;">
			<button class="btn btn-primary btn-lg" style="margin-left: 39rem;">Simpan</button>
	</div>
</div> -->
<!-- <PISAH> -->
<!-- <div class="dashboard-foto-profile">
		<h4 style="position: relative; bottom: 11rem; left: 404px; margin-top: 2rem;">Edit foto profile</h4>
		<hr style="border: 1px solid grey;width: 59%;position: relative;left: 8rem;bottom: 12rem;">
		<div style="display: flex;">
			<input hidden id="add-img" type="file" multiple/>
				<div class="col-dashboard">
				label for="add-img">
		<div class="btn-add-img rounded-circle" style="position: relative;left: 611%;bottom: 181px;">+
					</div>
			</label>
		</div>
	</div>
		<span style="position: absolute; left: 33rem; bottom: -116px;">
					<em>Foto yang di Upload disarankan</em><br>
					<em>Berukuran 72px x 75px</em><br>
					<em>dan memiliki format PNG,JPG atau Jpeg</em>
		</span>
		<button class="btn btn-primary btn-lg" style="margin-left: 33rem;padding: 5px 60px;position: relative; bottom: 90px;">Simpan</button>
</div> -->
<!-- <PISAH> -->
<!-- <div class="container-dashboard-campign">
	<h4 style="position: relative; bottom: 11rem; left: 404px; margin-top: 2rem;">Edit foto campaign</h4>
	<hr style="border: 1px solid grey;width: 59%;position: relative;left: 8rem;bottom: 12rem;">
	<div class="container" style="position: relative;left: 293px;bottom: 12rem;">
		<div class="col-md-6">
			<div class="form-group">
				<div class="input-group">
					<span class="input-group-btn">
						<span class="btn btn-default btn-file">
							Browse… <input type="file" id="imgInp">
						</span>
					</span>
					<input type="text" class="form-control"readonly>
				</div>
				<label style="position: relative;top: 2rem;right: -1rem;"><i class="fa fa-camera"></i> Upload Image</label>
				<img id='img-upload-dashboard'/>
			</div>
			<button class="btn btn-primary btn-lg" style="margin-left: 33rem;padding: 5px 60px;position: relative; bottom: -17px; right: 92%;">Simpan</button>
		</div>
	</div>
</div>






<script type="text/javascript">
	

	$(document).ready( function() {
    	$(document).on('change', '.btn-file :file', function() {
		var input = $(this),
			label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
		input.trigger('fileselect', [label]);
		});

		$('.btn-file :file').on('fileselect', function(event, label) {
		    
		    var input = $(this).parents('.input-group').find(':text'),
		        log = label;
		    
		    if( input.length ) {
		        input.val(log);
		    } else {
		        if( log ) alert(log);
		    }
	    
		});
		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('#img-upload-dashboard').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$("#imgInp").change(function(){
		    readURL(this);
		}); 	
	});
</script> -->

									<!-- <pisah> -->

<!-- <div class="dashboard-deskrip-dana">
	<h4 style="position: relative; bottom: 11rem; left: 388px; margin-top: 2rem;">Deskripsi galang dana</h4>
	<hr style="border: 1px solid grey;width: 59%;position: relative;left: 7rem;bottom: 183px;">
	<form>
		<div class="form-group" style="position: relative;left: 24rem;bottom: 12rem;">
			Ajakan singkat :
			<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" style="width: 398px;
			position: relative;
			left: 8rem;
			bottom: 23px;"></textarea>
		</div>
	</form>
	<div id="summernote"> </div>
	<em style="position: relative;left: 29%;bottom: 298px;">cerita lengkap :</em>
<script>
$('#summernote').summernote({
toolbar: [
// [groupName, [list of button]]
['style', ['bold', 'italic', 'underline']],
['para', ['paragraph']],
['insert', ['picture','link',]]
]
});
</script>
</div>
<button class="btn btn-primary btn-lg" style="margin-left: 32rem;padding: 5px 60px;position: relative; bottom: 186px;">Simpan</button>
 -->
 								<!-- <pisah> -->

	<!-- 	<div class="dashboard-waktu-galang">
		<h4 style="position: relative; bottom: 11rem; left: 388px; margin-top: 2rem;">Edit batas waktu galang dana</h4>
		<em style="position: relative; bottom: 11rem; left: 388px; margin-top: 2rem;">Waktu penggalangan</em>
		<hr style="border: 1px solid grey;width: 59%;position: relative;left: 7rem;bottom: 183px;">
		
		<em style="position: relative;left: 29%;bottom: 181px;">Batas waktu terbaru :</em>
		<input id="datepicker" width="276" style="position: relative;left: 199%; bottom: 209px;">
    <script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    	<button class="btn btn-primary btn-lg" style="margin-left: 24rem;padding: 5px 60px;position: relative; bottom: 186px;">Simpan</button>
		</div> -->

							<!-- <pisah> -->

	<form action="">
		<div class="dashboard-pencairan-dana">
				<h4 style="position: relative; bottom: 11rem; left: 388px; margin-top: 2rem; cursor: pointer;">Pencairan dana</h4>
			<hr style="border: 1px solid grey;width: 59%;position: relative;left: 7rem;bottom: 183px;">
			<em style="position: relative;left: 29%;bottom: 181px;">Saldo : <strong>-</strong></em>
			<input class="form-control" type="text" placeholder="Jumlah pencairan dana" style="position: relative;left: 42%;bottom: 157px; width: 620px; text-align: center;">
			<em style="position: relative;left: 29%;bottom: 187px;">Jumlah pencairan dana</em>
			<select class="form-control" style="position: relative;left: 42%;bottom: 157px; width: 620px;">
  					<option>BNI</option>
  					<option>BRI</option>
  					<option>BCA</option>
  					<option>Muamalat</option>
			</select>
			<em style="position: relative;left: 29%;bottom: 187px;">Bank tujuan</em>
			<input class="form-control" type="text"  style="position: relative;left: 42%;bottom: 157px; width: 620px; text-align: center;">
			<em style="position: relative;left: 29%;bottom: 187px;">Nama pemilik rekening</em>
			<input class="form-control" type="text"  style="position: relative;left: 42%;bottom: 157px; width: 620px; text-align: center;">
			<em style="position: relative;left: 29%;bottom: 187px;">Nomor rekening</em>

			<button class="btn btn-primary btn-lg" style="margin-left: 55rem;padding: 5px 60px;position: relative; bottom: 136px;">Cairkan</button>
		</div>
	</form>

@endsection
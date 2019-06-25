@extends('master.master_main')
@section('content')

<div class="row">
	@for($i=0;$i<3;$i++)
	<div class="col-6 col-md-4 mb-5">
		<div class="card" style="width: 75%;position: relative;top: 177px;left: 15%;">
		  <a href=""><img src="{{asset('/img/msj1.jpg')}}" class="card-img-top" alt="..." style="height: 	178px;"></a>
		</div>
	</div>
	@endfor
	<br>
</div>
<form>	
	<div class="form-group" style="position: relative;left: 5%;top: 209px;">
	    <label for="exampleFormControlTextarea1">Informasi donasi :</label>
	    <textarea class="form-control" id="exampleFormControlTextarea1" rows="13" style="width:57%;" placeholder="Nama penzakat :
Tanggal Zakat:
Jenis zakat :
Jumlah zakat :
Tanggal penyerahan zakat :
Nama-nama penerima zakat :
1.
2.
3.
4.
"></textarea>
	  </div>
</form>
		<div class="alert" style="width: 415px; position: relative;left: 37%; top: 287px; background-color: #f8f8f8; border-color: #f8f8f8; "><strong style="font-size: 14px; ">Terima kasih untuk para donatur yang sudah mempercayakan zakat nya kepada kami.
		Dan terima kasih sudah menggunakan website kami sebagai media penyaluran zakat anda</strong>
		</div>
@endsection
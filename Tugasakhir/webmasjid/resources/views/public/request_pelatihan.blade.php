@extends('master.master_main')
@section('content')
<div class="container">
  <br>  
  <h2 style="text-align: center;">Request Pelatihan</h2>
    <form action="">
    <div class="form-group">
      <label for="usr">Nama anda:</label>
      <input type="text" class="form-control" id="usr" name="username">
    </div>
    <div class="form-group">
      <label for="no_hp">No hp:</label>
      <input type="text" class="form-control input-number" id="pwd" name="no_hp">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" name="email">
    </div>
    <div class="form-group">
      <label for="deskripsi">Deskripsi Jadwal:</label>
      <textarea class="form-control" rows="13" id="comment" name="deskripsi" 
      placeholder="Judul kajian* :
Nama Ustadz* :
Hari dan tanggal kajian* :
Waktu mulai* :
Waktu selesai* :
Lokasi Kajian* :
Keterangan tambahan: 
 
Dengan mengirimkan ini saya bersumpah atas nama Allah subhanahu wa ta'ala bahwa data jadwal kajian yang saya kirimkan adalah benar.
 
*Harus diisi
*Perlu diperhatikan operasional update jadwal kajian kami adalah jam 06.00 - 10.00 WIB. Sehingga pengiriman jadwal di atas jam tersebut berpotensi diupload pada keesokan harinya."></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Kirim</button>
  </form>
</div>
@endsection
 

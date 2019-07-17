@extends('master.master_admin')
@section('content')
<div id="formAdd">
  <div class="title-admin">Tambah Penyerahan Zakat</div>
  <div class="content-admin">
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Tanggal Penyerahan</div>
      <div class="col pr-0">
        <input type="" name="" id="Nama" placeholder="Tanggal Penyerahan" class="form-control" style="max-width: 25rem">
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Kategori Penyerahan</div>
      
      <div class="col pr-0">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <div class="row">
                <div class="col-sm-4">
                  <div class="form-group">
                    <select name="combo" class="form-control" style="position: relative;right: 7%;top: 6px;">
                      <option value="">--kategori Penyerahan--</option>
                      <option value="1">Zakat Profesi</option>
                      <option value="2">Zakat maal</option>
                      <option value="3">Zakat Fitrah</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Tambah Data</div>
      <div class="col pr-0">
        <div class="row m-0">
          <button type="button" class="btn btn-app" data-toggle="modal" data-target="#exampleModal" style="">+</button>
          <div class="col p-0">
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Tambah data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <div class="col pr-0">
                      <table  class="table text-center table-striped">
                        <thead>
                          <tr>
                            <th scope="col">Jenis Zakat</th>
                            <th scope="col">Nama Penzakat</th>
                            <th scope="col">Jumlah Zakat</th>
                            <th scope="col">Rekening</th>
                            <th scope="col">Status</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-app">Tambahkan</button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Tabel Zakat</div>
      
      <div class="col pr-0">
        <table  class="table text-center table-striped">
          <thead>
            <tr>
              <th scope="col">Jenis Zakat</th>
              <th scope="col">Nama Penzakat</th>
              <th scope="col">Jumlah Zakat</th>
              <th scope="col">Rekening</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Total Zakat</div>
      
      <div class="col pr-0">
        <input type="" name="" id="Alamat" placeholder="Total donasi" class="form-control" style="max-width: 25rem">
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Gambar</div>
      <div class="col pr-0">
        <div class="row m-0">
          <input class="hidden" id="add-img" accept="image/*" type="file" multiple/>
          <div class="col p-0">
            <label for="add-img">
              <div class="" style="display: inline-block;height: 9rem;background: #e0e0e0;width: 9rem;line-height: 91px;text-align: center;font-size: 37px;color: #9e9e9e;cursor: pointer;">+</div>
            </label>
          </div>
        </div>
      </div>
    </div>
    <div class="row m-0 mb-3">
      <div class="col p-0 pt-2 font-14 text-bold" style="max-width: 14rem">Keterangan</div>
      <div class="col pr-0">
        <div id="desc2"></div>
      </div>
    </div>
    <div class="text-right mb-5">
      <button class="btn btn-app" id="save">Tambah Penyerahan Zakat</button>
    </div>
  </div>
</div>
<script type="text/javascript">
var fileImg = [];
var dataAll = [];
$('#budaya').addClass('active');
$('#desc').summernote();
$('#desc2').summernote();
if(window.File && window.FileList && window.FileReader)
{
$('#add-img').on('change',function (event) {
var files = event.target.files; //FileList object
for(var i = 0; i< files.length; i++)
{
var file = files[i];
if(!file.type.match('image'))
continue;
var picReader = new FileReader();
picReader.addEventListener("load",function(event){
var picFile = event.target;
$('#add-img').before("<div class='img-view'><img class='thumbnail-img' src='" + picFile.result + "'" +
  "title='" + picFile.name + "'/><div class='del-img'>Hapus</div></div>");
  $('.del-img').click(function(){
  $(this).parent().remove();
  });
  });
  picReader.readAsDataURL(file);
  }
  });
  }
  $('#save').click(function () {
  $('.thumbnail-img').each(function (argument) {
  var img = $(this).attr('src');
  fileImg.push(img);
  });
  dataAll = ({
  'judul': $('#judul').val(),
  'kota': $('#kota').val(),
  'gambar': fileImg,
  'deskripsi':$('#desc').summernote('code')
  })
  // statusForm = variabel terdapat di main.js
  if(statusForm == 0){
  alert('lengkapi Data');
  }
  else if(fileImg == ''){
  alert('Gambar Tidak Ada');
  }
  else{
  $('#save').addClass('disabled');
  console.log(dataAll);
  $.ajax({
  url: "/api/admin/create/budaya",
  type: "POST",
  data:  dataAll,
  success:function(data){
  location.href="/admin/budaya";
  console.log(data);
  }
  });
  }
  });
  </script>
  @endsection
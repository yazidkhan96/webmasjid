<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/
Route::post('payment/zakat','PublicController@create_zakat');
Route::post('payment/donasi','PublicController@create_donasi');
Route::post('pembayaran/va/zakat','AdminZakatController@pembayaranvazakat');
Route::get('/get/donasi/by/kategori/{id}','PublicController@get_donasi');
Route::get('/get/zakat/by/kategori/{id}','PublicController@get_zakat');
Route::post('/penyerahan/bantuan','PublicController@penyerahanBantuan');
Route::post('add/penarikan/dana','PublicController@penarikandana');

Route::post('admin/upload/masjid','AdminMasjidController@uploadmasjid');
Route::post('admin/update/masjid/{id}','AdminMasjidController@updatemasjid');

Route::post('admin/upload/forum','AdminForumController@uploadforum');
Route::post('admin/update/forum/{id}','AdminForumController@updateforum');

Route::post('admin/add/user','AdminController@addpengurus');
Route::post('update/user/{id}','AdminController@updatefotopengurus');


Route::post('admin/create/slider','AdminSliderController@createslider');
Route::post('admin/update/slider/{id}','AdminSliderController@updateslider');

Route::post('admin/add/kajian','AdminKajianController@addkajian');
Route::post('admin/update/kajian/{id}','AdminKajianController@updatejadwalkajian');
Route::post('admin/upload/perencanaan/kajian','AdminKajianController@perencanaankajian');
Route::post('admin/update/perencanaan/kajian/{id}','AdminKajianController@updatekajian');


Route::post('admin/upload/perencanaan/pelatihan','AdminPelatihanController@uploadpelatihan');
Route::post('admin/add/pelatihan','AdminPelatihanController@createjadwalpelatihan');

Route::post('admin/update/pelatihan/{id}','AdminPelatihanController@updatejadwalpelatihan');
Route::post('admin/update/perencanaan/pelatihan/{id}','AdminPelatihanController@updatepelatihan');

Route::post('admin/upload/kategori','AdminDonasiController@uploadkategori');
Route::post('pembayaran/va','AdminDonasiController@pembayaranva');


Route::post('admin/upload/galangdana','AdminDonasiController@uploadgalangdana');
Route::post('admin/update/galangdana/{id}','AdminDonasiController@updategalangdana');


Route::post('add/request/pelatihan','AdminPelatihanController@uploadreqpelatihan');
Route::post('add/request/kajian','AdminKajianController@uploadreqkajian');
Route::post('add/peserta/pelatihan','AdminPelatihanController@addpeserta');

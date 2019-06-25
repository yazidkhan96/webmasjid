<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/','PublicController@index');
Route::get('/profile_masjid','PublicController@masjid');
Route::get('/detail_masjid/{id}','PublicController@detail_masjid');
Route::get('/jadwal_kajian','PublicController@jadwal_kajian');
Route::get('/perencanaan_kajian','PublicController@perencanaan_kajian');
Route::get('/perencanaan_pelatihan','PublicController@perencanaan_pelatihan');
Route::get('/request_kajian','PublicController@request_kajian');
Route::get('/zakat_profesi','PublicController@zakat_profesi');
Route::get('/zakat_maal','PublicController@zakat_maal');
Route::get('/zakat_fitrah','PublicController@zakat_fitrah');
Route::get('/forum','PublicController@forum');
Route::get('/kalkulator_zakat','PublicController@kalkulator_zakat');
Route::get('/jadwal_pelatihan','PublicController@jadwal_pelatihan');
Route::get('/request_pelatihan','PublicController@request_pelatihan');
Route::get('/detail/perencanaan/pelatihan','PublicController@detailperencanaanpelatihan');
Route::get('/detail/perencanaan/kajian','PublicController@detailperencanaankajian');
Route::get('/detail_jadwal_pelatihan/{id}','PublicController@detail_jadwal_pelatihan');
Route::get('/payment_zakat','PublicController@payment_zakat');
Route::get('/dashboard_user','PublicController@dashboard_user');
Route::get('/login_user','PublicController@login_user');
Route::get('/detail_forum','PublicController@detail_forum');
Route::get('/donasi','PublicController@donasi');
Route::get('/detail_donasi','PublicController@detail_donasi');
Route::get('/payment_donasi','PublicController@payment_donasi');
Route::get('/detail_payment_donasi','PublicController@detail_payment_donasi');
Route::get('/laporan_donasi','PublicController@laporan_donasi');
Route::get('/laporan_zakat','PublicController@laporan_zakat');
Route::get('/detail_laporan_zakat','PublicController@detail_laporan_zakat');
Route::get('/detail_laporan_donasi','PublicController@detail_laporan_donasi');


Auth::routes();
Route::get('admin/login','AuthAdmin\LoginController@showLoginForm');
Route::post('admin/login','AuthAdmin\LoginController@login');
Route::get('admin/register','AuthAdmin\RegisterController@showRegistrationForm');
Route::post('admin/register','AuthAdmin\RegisterController@register');

Route::get('admin/logout','AuthAdmin\LoginController@logout_admin');
Route::get('user/logout','Auth\LoginController@logout_user');


Route::group(['prefix'=>'admin','middleware'=>'auth:admin'],function () {
	Route::get('/','AdminController@index');
	Route::get('/user','AdminController@user');
	Route::get('/add/user','AdminController@adduser');

	Route::get('/masjid','AdminMasjidController@masjid');
	Route::get('/add/profile/masjid','AdminMasjidController@addprofilemasjid');




	Route::get('/slider','AdminSliderController@slider');
	Route::get('/add/slider','AdminSliderController@addslider');


	Route::get('/forum','AdminForumController@forum');
	Route::get('/add/forum','AdminForumController@addforum');


	Route::get('/jadwalkajian','AdminKajianController@jadwalkajian');
	Route::get('/perencanaan_kajian','AdminKajianController@perencanaan_kajian');
	Route::get('/request_kajian','AdminKajianController@request_kajian');
	Route::get('/add/jadwal/kajian','AdminKajianController@addjadwalkajian');
	Route::get('/add/perencanaan/kajian','AdminKajianController@addperencanaankajian');


	Route::get('/jadwalpelatihan','AdminPelatihanController@jadwalpelatihan');
	Route::get('/add/jadwal/pelatihan','AdminPelatihanController@addjadwalpelatihan');
	Route::get('/perencanaan/pelatihan','AdminPelatihanController@perencanaanpelatihan');
	Route::get('/request/pelatihan','AdminPelatihanController@requestpelatihan');
Route::get('/daftar/peserta/pelatihan','AdminPelatihanController@daftarpesertapelatihan');
Route::get('/add/perencanaan/pelatihan','AdminPelatihanController@addperencanaanpelatihan');




	Route::get('/zakat','AdminZakatController@zakat');
	Route::get('/penyerahan/zakat','AdminZakatController@penyerahanzakat');
	Route::get('/add/penyerahan/zakat','AdminZakatController@addpenyerahanzakat');



	Route::get('/donasi','AdminDonasiController@donasi');
	Route::get('/pendonasi','AdminDonasiController@pendonasi');
	Route::get('/penyerahan/donasi','AdminDonasiController@penyerahandonasi');
	Route::get('/add/penyerahan/donasi','AdminDonasiController@addpenyerahandonasi');
	Route::get('/add/donasi','AdminDonasiController@adddonasi');







});



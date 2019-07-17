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
Route::group(['middleware'=>'auth:web'],function () {//pengurus	
	Route::get('/perencanaan_kajian','PublicController@perencanaan_kajian');
	Route::get('/tambah_kajian','PublicController@tambahkajian');
 
	Route::get('/perencanaan_pelatihan','PublicController@perencanaan_pelatihan');
	Route::get('/tambah_pelatihan','PublicController@tambahpelatihan');

	Route::get('/forum','PublicController@forum');
	Route::get('/tambah_forum','PublicController@addforum');
	Route::get('/detail/perencanaan/pelatihan','PublicController@detailperencanaanpelatihan');
	Route::get('/tambah/galang/dana','PublicController@tambahgalangdana');

	Route::get('/detail/perencanaan/kajian','PublicController@detailperencanaankajian');
	Route::get('/dashboard_user','PublicController@dashboard_user');
	Route::get('/login_user','PublicController@login_user');
	Route::get('/detail_forum/{id}','PublicController@detail_forum');	
	Route::post('/forum/reply/comment/{id}','PublicController@reply_comment');
	Route::post('/update/password','AdminController@update_password');
	Route::get('/ubah_password','PublicController@ubahpassword');
	Route::get('/ubah_foto','PublicController@ubahfoto');
});

//publik(tanpa login)
Route::get('/','PublicController@index');


Route::get('/profile_masjid','PublicController@masjid');
Route::get('/detail/masjid/{id}','PublicController@detailmasjid');
Route::get('/tambah/profile/masjid','PublicController@tambahmasjid');

Route::get('/jadwal_kajian','PublicController@jadwal_kajian');
Route::get('/tambah_kajian','PublicController@tambahkajian');



Route::get('/jadwal_pelatihan','PublicController@jadwal_pelatihan');
Route::get('/detail_jadwal_pelatihan/{id}','PublicController@detail_jadwal_pelatihan');
Route::get('/tambah/perencanaan/pelatihan','PublicController@tambahperencanaanpelatihan');


Route::get('/donasi','PublicController@donasi');
Route::get('/detail_donasi/{id}','PublicController@detail_donasi');


Route::get('/request_kajian','PublicController@request_kajian');
Route::get('/request_pelatihan','PublicController@request_pelatihan');

Route::get('/daftar_peserta','PublicController@daftarpeserta');

Route::get('/zakat_profesi','PublicController@zakat_profesi');
Route::get('/zakat_maal','PublicController@zakat_maal');
Route::get('/zakat_fitrah','PublicController@zakat_fitrah');

Route::get('/payment_zakat','PublicController@payment_zakat');
Route::get('/payment_donasi/{id}','PublicController@payment_donasi');
Route::get('/detail_payment_donasi','PublicController@detail_payment_donasi');

Route::get('/kalkulator_zakat','PublicController@kalkulator_zakat');
Route::get('/laporan_donasi','PublicController@laporan_donasi');
Route::get('/laporan_zakat','PublicController@laporan_zakat');

Route::get('/detail_laporan_zakat','PublicController@detail_laporan_zakat');
Route::get('/detail_laporan_donasi','PublicController@detail_laporan_donasi');
//endpublik

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
	Route::get('/delete/user/{id}','AdminController@deletepengurus');

	Route::get('/masjid','AdminMasjidController@masjid');
	Route::get('/add/profile/masjid','AdminMasjidController@addprofilemasjid');
	Route::get('/edit/profile/masjid/{id}','AdminMasjidController@editprofilemasjid');
	Route::get('/delete/profile/masjid/{id}','AdminMasjidController@deleteprofilemasjid');

	Route::get('/slider','AdminSliderController@slider');
	Route::get('/add/slider','AdminSliderController@addslider');
	Route::get('/edit/slider/{id}','AdminSliderController@editslider');
	Route::get('/delete/slider/{id}','AdminSliderController@deleteslider');

	Route::get('/forum','AdminForumController@forum');
	Route::get('/add/forum','AdminForumController@addforum');
	Route::get('/edit/forum/{id}','AdminForumController@editforum');
	Route::get('/delete/forum/{id}','AdminForumController@deleteforum');

	Route::get('/jadwalkajian','AdminKajianController@jadwalkajian');
	Route::get('/perencanaan_kajian','AdminKajianController@perencanaan_kajian');
	Route::get('/request_kajian','AdminKajianController@request_kajian');
	Route::get('/add/jadwal/kajian','AdminKajianController@addjadwalkajian');
	Route::get('/edit/jadwal/kajian/{id}','AdminKajianController@editkajian');
	Route::get('/add/perencanaan/kajian','AdminKajianController@addperencanaankajian');
	Route::get('/edit/perencanaan/kajian/{id}','AdminKajianController@editperencanaankajian');
	Route::get('/delete/perencanaan/kajian/{id}','AdminKajianController@deleteperencanaankajian');

	Route::get('/jadwalpelatihan','AdminPelatihanController@jadwalpelatihan');
	Route::get('/add/jadwal/pelatihan','AdminPelatihanController@addjadwalpelatihan');
	Route::post('/create/jadwal/pelatihan','AdminPelatihanController@createjadwalpelatihanadmin');
	Route::get('/edit/jadwal/pelatihan/{id}','AdminPelatihanController@editpelatihan');
	Route::get('/delete/jadwal/pelatihan/{id}','AdminPelatihanController@deletepelatihan');

	Route::get('/perencanaan/pelatihan','AdminPelatihanController@perencanaanpelatihan');
	Route::get('/request/pelatihan','AdminPelatihanController@requestpelatihan');
	Route::get('/daftar/peserta/pelatihan','AdminPelatihanController@daftarpesertapelatihan');
	Route::get('/add/perencanaan/pelatihan','AdminPelatihanController@addperencanaanpelatihan');
	Route::get('/edit/perencanaan/pelatihan/{id}','AdminPelatihanController@editperencanaanpelatihan');
	Route::get('/delete/perencanaan/pelatihan/{id}','AdminPelatihanController@deleteperencanaanpelatihan');

	Route::get('/zakat','AdminZakatController@zakat');
	Route::get('/penyerahan/zakat','AdminZakatController@penyerahanzakat');
	Route::get('/add/penyerahan/zakat','AdminZakatController@addpenyerahanzakat');

	Route::get('/galangdana','AdminDonasiController@galangdana');
	Route::get('/pendonasi','AdminDonasiController@pendonasi');
	Route::get('/penyerahan/donasi','AdminDonasiController@penyerahandonasi');
	Route::get('/add/penyerahan/donasi','AdminDonasiController@addpenyerahandonasi');
	Route::get('/add/galangdana','AdminDonasiController@addgalangdana');
	Route::get('/edit/galangdana/{id}','AdminDonasiController@editgalangdana');
});



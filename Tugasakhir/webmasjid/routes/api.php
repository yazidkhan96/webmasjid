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

Route::post('admin/upload/masjid','AdminMasjidController@uploadmasjid');
Route::post('admin/upload/forum','AdminForumController@uploadforum');
Route::post('admin/add/user','AdminController@addpengurus');
Route::post('admin/create/slider','AdminSliderController@createslider');
Route::post('admin/add/kajian','AdminKajianController@addkajian');
Route::post('admin/upload/perencanaan/kajian','AdminKajianController@perencanaankajian');
Route::post('admin/upload/perencanaan/pelatihan','AdminPelatihanController@uploadpelatihan');



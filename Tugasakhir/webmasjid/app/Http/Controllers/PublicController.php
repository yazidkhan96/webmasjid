<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function index()
    {
    	return view ('public.index');
    }

    public function masjid()
    {
    	return view('public.profile_masjid');
    }


    public function detailmasjid()
    {
    	return view('public.detail_masjid');
    }


     public function jadwal_kajian()
    {
    	return view('public.jadwal_kajian');
    }


    public function request_kajian()
    {
        return view('public.request_kajian');
    }


     public function perencanaan_kajian()
    {
        return view('public.perencanaan_kajian');
    }


    public function zakat_profesi()
    {
        return view('public.zakat_profesi');
    }


    public function zakat_fitrah()
    {
        return view('public.zakat_fitrah');
    }


    public function zakat_maal()
    {
        return view('public.zakat_maal');
    }


     public function kalkulator_zakat()
    {
        return view('public.kalkulator_zakat');
    }


    public function jadwal_pelatihan()
    {
        return view('public.jadwal_pelatihan');
    }


     public function perencanaan_pelatihan()
    {
        return view('public.perencanaan_pelatihan');
    }


    public function request_pelatihan()
    {
        return view('public.request_pelatihan');
    }
    public function detailperencanaanpelatihan()
    {
        return view('public.detail_perencanaan_pelatihan');
    }

    public function detailperencanaankajian()
    {
        return view('public.detail_perencanaan_kajian');
    }

    public function detail_jadwal_pelatihan()
    {
        return view('public.detail_jadwal_pelatihan');
    }

    public function payment_zakat()
    {
        return view('public.payment_zakat');
    }

      public function dashboard_user()
    {
        return view('public.dashboard_user');
    }

     public function login_user()
    {
        return view('public.login_user');
    }
    public function forum()
    {
        return view('public.forum');
    }
    public function detail_forum()
    {
        return view('public.detail_forum');
    }
    public function donasi()
    {
        return view('public.donasi');
    }
     public function detail_donasi()
    {
        return view('public.detail_donasi');
    }
    public function payment_donasi()
    {
        return view('public.payment_donasi');
    }
    public function detail_payment_donasi()
    {
        return view('public.detail_payment_donasi');
    }
    public function laporan_donasi()
    {
        return view('public.laporan_donasi');
    }
    public function laporan_zakat()
    {
        return view('public.laporan_zakat');
    }
    public function detail_laporan_zakat()
    {
        return view('public.detail_laporan_zakat');
    }
     public function detail_laporan_donasi()
    {
        return view('public.detail_laporan_donasi');
    }
}

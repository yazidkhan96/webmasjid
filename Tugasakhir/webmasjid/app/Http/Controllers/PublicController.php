<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Forum;
use App\ChatForum;
use App\Penzakat;
use App\Pelatihan;
use App\Galang_dana;
use App\Donasi_pengunjung;
use App\Masjid;
use App\Perencanaan_kajian_pelatihan;
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

    public function daftarpeserta()
    {
        return view('public.daftar_peserta');
    }

    public function detailmasjid($id)
    {
         $masjid=Masjid::find($id);
    	return view('public.detail_masjid',compact('masjid'));
    }

    public function addforum()
    {
        return view('public.tambah_forum');
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
    public function tambahperencanaanpelatihan()
    {
       return view('public.tambah_perencanaan_pelatihan');
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

    public function detail_jadwal_pelatihan($id)
    {
        $pelatihan=Pelatihan::find($id);
        return view('public.detail_jadwal_pelatihan',compact('pelatihan'));
    }

    public function payment_zakat()
    {
        return view('public.payment_zakat');
    }
    public function create_zakat(Request $r)
    {
        $zakat=new Penzakat();
        $zakat->zakat_id=$r->zakat_id;
        $zakat->nama_penzakat=$r->nama;
        $zakat->jumlah_zakat=$r->zakat;
        $zakat->email=$r->email;
        $zakat->no_hp=$r->no_hp;
        $zakat->save();
        return response()->json($r->all());
    }

    public function create_donasi(Request $r)
    {
        $donasi=new Donasi_pengunjung();
        $donasi->kategori_id=$r->kategori_id;
        $donasi->virtual_account=rand(1111111111,9999999999);
        $donasi->nama_pendonasi=$r->nama;
        $donasi->judul_donasi=$r->juduldonasi;
        $donasi->jumlah_donasi=$r->jumlahdonasi;
        $donasi->email=$r->email;
        $donasi->status=$r->status;
        $donasi->nama_bank=$r->namabank;
        $donasi->save();
        return response()->json($r->all());
    }
      public function get_donasi($id)
    {
        $donasi=Donasi_pengunjung::where('kategori_id',$id)->get();
        return response()->json($donasi);
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

    public function tambahkajian()
    {
        return view('public.tambah_kajian');
    }

    public function tambahpelatihan()
    {
        return view('public.tambah_pelatihan');
    }
    public function detail_forum($id)
    {
        $forum=Forum::find($id);
        return view('public.detail_forum',compact('forum'));
    }

    public function reply_comment(Request $r,$id)
    {
        $chat=new ChatForum();
        $chat->forum_id=$r->forum_id;
        $chat->chat_forum_id=$id;
        $chat->user_id=Auth::user()->id;
        $chat->message=$r->message;
        $chat->save();

        return back();
    }
    public function donasi()
    {
        return view('public.donasi');
    }
     public function detail_donasi($id)
    {
        $galangdana=Galang_dana::find($id);
        return view('public.detail_donasi',compact('galangdana'));
    }
    public function payment_donasi($id)
    {
        $galangdana=Galang_dana::find($id);
        return view('public.payment_donasi',compact('galangdana'));
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
    public function ubahpassword()
    {
        return view('public.ubah_password');
    }
    public function ubahfoto()
    {
        return view('public.ubah_foto');
    }
     public function tambahgalangdana()
    {
        return view('public.tambah_galang_dana');
    }

    public function tambahmasjid()
    {
        return view('public.tambah_masjid');
    }
}

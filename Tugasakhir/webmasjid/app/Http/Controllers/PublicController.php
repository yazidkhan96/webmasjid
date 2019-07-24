<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use DB;
use Action;
use App\Forum;
use App\ChatForum;
use App\Penzakat;
use App\Pelatihan;
use App\Galang_dana;
use App\Donasi_pengunjung;
use App\Masjid;
use App\Perencanaan_kajian_pelatihan;
use App\Penyerahan;
use App\Zakat;
use App\Penarikan;
use App\Peserta_pelatihan;
class PublicController extends Controller
{
    public function index()
    {
    	return view ('public.index');
    }
    public function search(Request $r)
    {
        $results=Masjid::where('nama_masjid','like','%'.$r->key.'%')
        ->orWhere('alamat_masjid','like','%'.$r->key.'%')
        ->get();
        $key=$r->key;
        return view ('public.search_masjid',compact('results','key'));
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

    public function detailperencanaanpelatihan($id)
    {
        $perencanaanpelatihan=Perencanaan_kajian_pelatihan::find($id);
        return view('public.detail_perencanaan_pelatihan',compact('perencanaanpelatihan'));
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
        $zakat->virtual_account=$r->virtual_account;
        $zakat->email=$r->email;
        $zakat->no_hp=$r->no_hp;
        $zakat->save();
        return response()->json($r->all());
    }


    public function penarikandana(Request $r)
    {

        $penarikan=new Penarikan();
        $penarikan->user_id=$r->username;
        $penarikan->email=$r->email;
        $penarikan->jumlah_penarikan=$r->jumlahpencairan;
        $penarikan->bank_tujuan=$r->banktujuan;
        $penarikan->nama_rekening=$r->namarekening;
        $penarikan->nomor_rekening=$r->nomorrekening;
        $penarikan->save();
        return response()->json($r->all());
    }

    public function create_donasi(Request $r)
    {
        $donasi=new Donasi_pengunjung();
        $donasi->galangdana_id=$r->galangdana;
        $donasi->virtual_account=$r->virtual_account;
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
        $donasi=Donasi_pengunjung::rightJoin('galang_danas','galang_danas.id','donasi_pengunjungs.galangdana_id')->
        where(['galang_danas.kategori_id'=>$id,'status_penyerahan'=>'belumdiserahkan','status'=>'sudahbayar'])->get();
        return response()->json($donasi);
    } 

      public function get_zakat($id)
    {
        $zakat=Penzakat::where(['zakat_id'=>$id,'status_penyerahan'=>'belumdiserahkan','status'=>'sudahbayar'])->get();
        return response()->json($zakat);
    }
    public function penyerahanBantuan(Request $r)
    {
           $penyerahan=new Penyerahan();
           $penyerahan->tanggal=$r->tanggalpenyerahan;
           $penyerahan->kategori_penyerahan=$r->jenis;
           $penyerahan->sumber_dana_id=implode(',',$r->sumber_id);
           $penyerahan->total_donasi=$r->total_donasi;
           $penyerahan->gambar=Action::save_multiple_foto($r->gambar,'Penyerahan');
           $penyerahan->keterangan=$r->deskripsi;
           if($penyerahan->save()){
                if ($r->jenis==='zakat') {
                Penzakat::whereIn('id',$r->sumber_id)->update(['status_penyerahan'=>'sudahdiserahkan']);
                }else{
                Donasi_pengunjung::whereIn('id',$r->sumber_id)->update(['status_penyerahan'=>'sudahdiserahkan']);
                }
            }
            return response()->json($r->all());
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
  

    public function reply_comment(Request $r)
    {
        //return dd($r->all());
        $chat=new ChatForum();
        $chat->forum_id=$r->forum_id;
        $chat->chat_forum_id=$r->chat_forum_id;
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
    public function detail_laporan_zakat($id)
    {
        $penyerahan=Penyerahan::find($id);
        return view('public.detail_laporan_zakat',compact('penyerahan'));
    }
     public function detail_laporan_donasi($id)
    {
        $penyerahan=Penyerahan::find($id);
        return view('public.detail_laporan_donasi',compact('penyerahan'));
    }
    public function ubahpassword()
    {
        return view('public.ubah_password');
    }
    public function ubahfoto()
    {
        return view('public.ubah_foto');
    }
    public function galangdanapublic()
    {   
        
        return view('public.galang_dana');
    }
     public function tambahgalangdana()
    {
        return view('public.tambah_galang_dana');
    }

    public function tambahmasjid()
    {
        return view('public.tambah_masjid');
    }
    public function editgalang($id)
    {
        $galangdana=Galang_dana::find($id);
        return view('public.edit_galangdana',compact('galangdana'));
    }
    public function verifpeserta($id)
    {
        $request=Peserta_pelatihan::find($id);
        $mail=Action::sendEmail($request->nama_pengunjung,'Selamat anda berhasil mendaftar sebagai peserta','Pendaftaran Di Terima',$request->email);
        return back();        
    }

    public function confirmzakat($id)
    {
        $request=Penzakat::find($id);
        $mail=Action::sendEmail($request->nama_pengunjung,'Selamat zakat anda berhasil kami terima dan akan segera kami berikan kepada yang mustahik menerima nya, Semoga allah membalas kebaikan anda','zakat Di Terima',$request->email);
        return back()->with('alert-success','Berhasil Kirim Email');       
    }
}

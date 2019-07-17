<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donasi;
use App\Kategori_donasi;
use App\Galang_dana;
use App\Donasi_pengunjung;
use Action;
use Auth;
class AdminDonasiController extends Controller
{
    public function galangdana()
    {
        return view ('admin.galangdana');
    }
     public function pendonasi()
    {
        return view ('admin.pendonasi');
    }
     public function penyerahandonasi()
    {
        return view ('admin.penyerahan_donasi');
    }
     public function addpenyerahandonasi()
    {
        return view ('admin.add_penyerahan_donasi');
    }
     public function pembayaranva(Request $r)
    {
        $bayar=Donasi_pengunjung::where('virtual_account',$r->virtual_account)->first();
        if ($bayar->status==='pending') {
            $bayar->status='dibayar';
            $bayar->save();
            return response()->json(['message'=>'terima kasih,Bpk/Ibu '.$bayar->nama_pendonasi.' telah mendonasikan dana senilai:'.$bayar->jumlah_donasi]);
        }else if($bayar->status==='expired'){
            return response()->json(['message'=>'maaf, no virtual telah expired']);
        }else{
            return response()->json(['message'=>'maaf, no virtual telah dibayar']);
        }

    } 
     public function addgalangdana()
    {
        return view ('admin.add_galang_dana');

    } 
 
    public function editgalangdana($id)
    {
        $galangdana=Galang_dana::find($id);
        return view ('admin.edit_galang_dana',compact('galangdana'));
    }

     public function uploadkategori(Request $r)
    {
        $kategori =new Kategori_donasi();
        $kategori->nama_kategori=$r->namakategori;
        $kategori->save();
        return response()->json(['data'=>$r->all()]);
    }


    public function uploadgalangdana(Request $r)
    {
        $galangdana =new Galang_dana();
        $galangdana->kategori_id=$r->kategori;
        $galangdana->creator=$r->creator;
        $galangdana->creator_id=$r->creator_id;
        $galangdana->judul=$r->judul;
        $galangdana->biaya_yang_dibutuhkan=$r->target;
        $galangdana->batas_waktu=$r->bataswaktu;
        $galangdana->gambar=Action::save_multiple_foto($r->gambar,'Donasi');
        $galangdana->deskripsi=$r->deskripsi;
        $galangdana->save();
        return response()->json(['data'=>$r->all()]);
    }


    public function updategalangdana(Request $r,$id)
    {
        $galangdana=Galang_dana::find($id);
        $galangdana->kategori_id=$r->kategori;
        $galangdana->judul=$r->judul;
        $galangdana->biaya_yang_dibutuhkan=$r->target;
        $galangdana->batas_waktu=$r->bataswaktu;
        $galangdana->gambar=Action::update_multiple_foto($r->gambar,'Donasi',$galangdana->gambar,$r->gambar_hapus);
        $galangdana->deskripsi=$r->deskripsi;
        $galangdana->save();
        return response()->json(['data'=>$r->all()]);
    }

}


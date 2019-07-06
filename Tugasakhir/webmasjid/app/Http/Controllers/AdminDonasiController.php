<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Donasi;
use App\Kategori_donasi;
use App\Galang_dana;
use Action;
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
     public function addgalangdana()
    {
        return view ('admin.add_galang_dana');

    } 
    public function kategori()
    {
        return view ('admin.kategori');

    } 

    public function addkategori()
    {
        return view ('admin.add_kategori');

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
        $galangdana->judul=$r->judul;
        $galangdana->biaya_yang_dibutuhkan=$r->target;
        $galangdana->batas_waktu=$r->bataswaktu;
        $galangdana->gambar=Action::save_foto($r->gambar,'Donasi');
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
        $galangdana->gambar=Action::update_foto($r->gambar,'Donasi',$galangdana->gambar);
        $galangdana->deskripsi=$r->deskripsi;
        $galangdana->save();
        return response()->json(['data'=>$r->all()]);
    }

}


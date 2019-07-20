<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Penzakat;

class AdminZakatController extends Controller
{
    public function Zakat()
    {
        return view ('admin.zakat');
    }
     public function penyerahanzakat()
    {
        return view ('admin.penyerahan_zakat');
    }
    public function addpenyerahanzakat()
    {
        return view ('admin.add_penyerahan_zakat');
    }

    public function pembayaranvazakat(Request $r)
    {
        $bayar=Penzakat::where('virtual_account',$r->virtual_account)->first();
        if ($bayar->status==='pending') {
            $bayar->status='bayar';
            $bayar->save();
            return response()->json(['message'=>'terima kasih,Bpk/Ibu '.$bayar->nama_penzakat.' telah membayar zakat senilai:'.$bayar->jumlah_zakat]);
        }else if($bayar->status==='expired'){
            return response()->json(['message'=>'maaf, no virtual telah expired']);
        }else{
            return response()->json(['message'=>'maaf, no virtual telah dibayar']);
        }
    }
}

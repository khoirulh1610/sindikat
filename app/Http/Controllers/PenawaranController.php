<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\PenawaranMail;

class PenawaranController extends Controller
{
    public function penawaran(Request $request)
    {
        $validate = $request->validate([            
            'name'=>'required',
            'email'=>'required|email',
            'price_id'=>'required',
            'packet_id'=>'required',
            'phone'=>'required',
        ]);
        $packet = DB::table('packet')->where('id',$request->packet_id)->first();
        $price = DB::table('price')->where('id',$request->price_id)->first();
        if($packet && $price){
            $penawaran = [
                'packet_id'=>$request->packet_id,
                'price_id'=>$request->price_id,
                'email'=>$request->email,
                'name'=>$request->name,  
                'phone'=>$request->phone,
                'created_at'=>Date('Y-m-d H:i:s'),                
                'harga'=>$price->harga,
                'ppn'=>$price->ppn,
            ];
            $id = DB::table('penawaran')->insertGetId($penawaran);
            $penawaran['keterangan'] = $price->keterangan;            
            $penawaran['id'] = $id;
            Mail::to($request->email, $request->name)->send(new PenawaranMail($penawaran));        
            return redirect()->back()->with('success','Terimakasih, Kami akan segera menghubungi anda...');
        }else{
            return redirect()->back()->with('error','Terjadi kesalahan, silahkan coba lagi...');
        }
    }
}

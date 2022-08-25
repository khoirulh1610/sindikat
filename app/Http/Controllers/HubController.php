<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\HubungikamiMail;

class HubController extends Controller
{
    public function hub_kami(Request $request)
    {
        // return $request->all();
        $validate = $request->validate([
            'message'=> 'required',
            'name'=>'required',
            'email'=>'required|email'
        ]);
        $kon = [
            'comment'=>$request->message,
            'name'=>$request->name,
            'phone'=>$request->phone,
            'email'=>$request->email,
            'service'=>'all',
            'created_at'=>Date('Y-m-d H:i:s')
        ];
        DB::table('contact_us')->insert($kon);
        Mail::to($request->email, $request->name)->send(new HubungikamiMail($kon));        
        return redirect()->back()->with('success','Terimakasih, Kami akan segera menghubungi anda...');
    }

    function KirimEmail()
    {
        $data = DB::table('contact_us')->first();
        Mail::to('khoirulh1610@gmail.com', 'Khoirul')->send(new HubungikamiMail($data));
    }

    
}

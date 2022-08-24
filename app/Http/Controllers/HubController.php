<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HubController extends Controller
{
    public function hub_kami(Request $request)
    {
        $validate = $request->validate([
            'message'=> 'required',
            'name'=>'required'
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
        return redirect()->back()->with('success','Terimakasih, Kami akan segera menghubungi anda...');
    }
}

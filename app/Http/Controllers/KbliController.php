<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kbli;

class KbliController extends Controller
{
    public function index(Request $request)
    {
        $keyword = strtoupper(trim($request->keyword)) ?? null;
        $kbli = Kbli::paginate(20);        
        if($keyword){
            $kbli = Kbli::where('code',$keyword)->orWhere('title','like','%'.$keyword.'%')->paginate(20);        
        }
        return view('kbli.index',compact('kbli','keyword'));
    }
}

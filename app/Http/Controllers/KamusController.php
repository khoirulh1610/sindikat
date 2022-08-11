<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KamusHukum;

class KamusController extends Controller
{
    public function kamus_hukum(Request $request)
    {
        $kamus = null;
        if($request->keyword){
            $kamus = KamusHukum::where('indo','like','%'.$request->keyword.'%')
            ->orWhere('asing','like','%'.$request->keyword.'%')
            ->select('indo')
            ->groupBy('indo')
            ->paginate(25);                    
        }                 
        $keyword = $request->keyword ?? null;
        return view('kamus.kamus_hukum', compact('kamus','keyword'));
    }

    public function kamus_hukum_detail(Request $request,$url)
    {
        if(strlen($url)<75){
            $kamus = KamusHukum::where('indo',$url)->get();
        }else{
            $kamus = KamusHukum::where('indo','like',$url.'%')->get();
        }        
        return view('kamus.kamus_hukum_detail', compact('kamus','url'));
    }




    public function istilah_hukum(Request $request)
    {
        $kamus = null;
        if($request->keyword){
            $kamus = KamusHukum::where('indo','like','%'.$request->keyword.'%')
            ->orWhere('asing','like','%'.$request->keyword.'%')
            ->select('indo')
            ->groupBy('indo')
            ->paginate(25);       
        }
        $keyword = $request->keyword ?? null;
        return view('kamus.kamus_istilah_hukum', compact('kamus','keyword'));
    }

    public function kamus_istilah_hukum_detail(Request $request,$url)
    {
        $kamus = KamusHukum::first();
        return view('kamus.kamus_istilah_hukum_detail', compact('kamus','url'));
    }
}

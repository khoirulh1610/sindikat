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
            $kamus = KamusHukum::select('indo','url')
            ->where('indo','like','%'.$request->keyword.'%')                        
            ->whereNotNull('asing')
            ->groupBy('indo','url')    
            ->orderBy('indo')        
            ->paginate(25);                               
        }                 
        $keyword = $request->keyword ?? null;
        return view('kamus.kamus_hukum', compact('kamus','keyword'));
    }

    public function kamus_hukum_detail(Request $request,$url)
    {
        // if(strlen($url)<75){
        //     $kamus = KamusHukum::where('indo',$url)->get();
        // }else{
        //     $kamus = KamusHukum::where('indo','like',$url.'%')->get();
        // }        
        $kamus = KamusHukum::where('url',$url)->get();
        return view('kamus.kamus_hukum_detail', compact('kamus','url'));
    }




    public function istilah_hukum(Request $request)
    {
        $kamus = null;
        if($request->keyword){
            $kamus = KamusHukum::where('indo','like','%'.$request->keyword.'%')
            ->orWhere('asing','like','%'.$request->keyword.'%')            
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

    public function update()
    {
        $kamus = KamusHukum::whereNull('url')->get();
        foreach ($kamus as $k) {
            $url = $k->indo ?? $k->asing ?? $k->id;
            $url = str_replace(' ','-',trim($url));
            $url = preg_replace('/[^a-zA-Z0-9\'-]/','',$url);
            $url = str_replace('--','-',$url);
            $url = str_replace('--','-',$url);
            $url = substr($url,0,75);
            KamusHukum::where('id',$k->id)->update([
                'url'=>strtolower($url)
            ]);
        }
    }
}

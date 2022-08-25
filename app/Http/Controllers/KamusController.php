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
            $keys = explode(' ',$request->keyword);
            $cari = implode('%',explode(' ',$request->keyword));
            $kamus = KamusHukum::select('indo','url')
            ->where('indo','like','%'.$cari.'%')                        
            ->whereNotNull('asing')
            ->groupBy('indo','url')    
            ->orderBy('indo')        
            ->paginate(25);                               
        }                 
        $keyword = $request->keyword ?? null;
        return view('kamus.kamus_hukum', compact('kamus','keyword','keys'));
    }

    public function kamus_hukum_detail(Request $request,$url)
    {
        $kamus = KamusHukum::where('url',$url)->get();
        $keys = KamusHukum::select('indo')
        ->where('url',$url)
        ->groupBy('indo','url')         
        ->get();
        $keyword = "";
        foreach ($keys as $key) {
            $keyword .= $key->indo.' ';
        }
        $description = "";
        foreach ($kamus as $k) {
            $description .= $k->asing.'. ';
        }
        $data = [
            'description'=>$description,            
            'keywords'=>$keyword,
            'content'=>$description,
            'title'=>$keyword,
            'url'=>$url,
            'keys'=>$keys,
            'kamus'=>$kamus
        ];   
        return view('kamus.kamus_hukum_detail', $data);
    }




    public function istilah_hukum(Request $request)
    {
        $kamus = null;
        if($request->keyword){
            $kamus = KamusHukum::select('indo','url')
            ->where('indo','like','%'.$request->keyword.'%')                        
            ->whereNotNull('ket')
            ->groupBy('indo','url')    
            ->orderBy('indo')        
            ->paginate(25);                               
        }                 
        $keyword = $request->keyword ?? null;
        return view('kamus.kamus_istilah_hukum', compact('kamus','keyword'));
    }

    public function kamus_istilah_hukum_detail(Request $request,$url)    {
        
        $kamus = KamusHukum::where('url',$url)
        ->whereNotNull('ket')
        ->orderBy('id')
        ->get();
        $keys = KamusHukum::select('indo','asing')
        ->where('url',$url)
        ->whereNotNull('ket')
        ->groupBy('indo','asing')
        ->get();
        $keyword = "";
        foreach ($keys as $key) {
            $keyword .= $key->indo.'';
        }
        $description = "";
        foreach ($kamus as $k) {
            $description .= $k->ket.'. ';
        }
        $data = [
            'description'=>$description,            
            'keywords'=>$keyword,
            'content'=>$description,
            'title'=>$keyword.' - Sindikat',
            'url'=>$url,
            'keys'=>$keys,
            'kamus'=>$kamus
        ];
        return view('kamus.kamus_istilah_hukum_detail', $data);
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

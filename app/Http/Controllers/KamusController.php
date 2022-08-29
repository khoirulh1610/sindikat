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
        $data = [            
            'description'=>'Kamus Hukum 11.000++ Istilah Hukum di Indonesia. Terjemahan Indonesia ke Inggris / Latin / Belanda',           
            'keyword'=>$keyword,            
            'title'=>'Kamus Hukum - Terjemahan Indonesia - Inggris',            
            'keys'=>$keys,
            'kamus'=>$kamus
        ];   
        return view('kamus.kamus_hukum', $data);
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
            // 'description'=>$description,  
            'description'=>'Terjemahan ' .$keyword. ' dari Bahasa Indonesia ke Bahasa Inggris / Latin / Belanda. Kamus Hukum Terlengkap',           
            'keywords'=>$keyword,
            'content'=>$description,
            'title'=>'Terjemahan Bahasa - ' .$keyword,
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
            $keys = explode(' ',$request->keyword);
            $cari = implode('%',explode(' ',$request->keyword));
            $kamus = KamusHukum::select('indo','url')
            ->where('indo','like','%'.$cari.'%')                        
            ->whereNotNull('ket')
            ->groupBy('indo','url')    
            ->orderBy('indo')        
            ->paginate(25);                               
        }                 
        $keyword = $request->keyword ?? null;
        $data = [            
            'description'=>'Cari Pengertian Istilah Hukum. Ada 2.000++ Istilah Hukum. Cari Sekarang',           
            'keyword'=>$keyword ?? '',            
            'title'=>'Istilah Hukum - Arti & Pengertian',            
            'keys'=>$keys,
            'kamus'=>$kamus
        ];  
        return view('kamus.kamus_istilah_hukum', $data);
    }

    public function kamus_istilah_hukum_detail(Request $request,$url)    {
        
        $kamus = KamusHukum::where('url',$url)
        ->whereNotNull('ket')
        ->orderBy('id')
        ->get();
        $keys = KamusHukum::select('indo')
        ->where('url',$url)
        ->whereNotNull('ket')
        ->groupBy('indo')
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
            // 'description'=>$description,  
            'description'=>'Pengertian ' .$keyword.' adalah ' .$description,           
            'keywords'=>$keyword,
            'content'=>$description,
            'title'=>'Pengertian ' .$keyword.' - Kamus Istilah Hukum',
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
            $url = str_replace('/','-',trim($url));
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

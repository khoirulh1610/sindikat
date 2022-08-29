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

        $data=[
            'kbli' => $kbli,
            'keyword' => $keyword,
            'title' => 'KBLI',
            'description' => 'KBLI',            
        ];
        
        return view('kbli.index',$data);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kbli;

class KbliController extends Controller
{
    public function index(Request $request)
    {
        $kbli = Kbli::all();
        return view('kbli.index',compact('kbli'));
    }
}

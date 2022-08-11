<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        $blog = Blog::all();
        return view('siasat.index', compact('blog'));
    }

    public function detail(Request $request, $url)
    {
        $blog = Blog::where('url', $url)->first();
        return view('siasat.detail', compact('blog'));
    }
}

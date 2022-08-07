<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
});


Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blog/{url}', [BlogController::class, 'detail'])->name('blog.detail');

Route::get('/{slug}/{url}', function ($slug,$url) {
    if(View::exists($slug.'.'.$url)){
        return view($slug.'.'.$url);
    }else{
        return view('404', compact('url'));
    }
});

Route::get('/{url}', function ($url) {
    if(View::exists('page.'.$url)){
        return view('page.'.$url);
    }else{
        return view('404', compact('url'));
    }
});
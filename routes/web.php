<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KamusController;

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


Route::get('/siasat', [BlogController::class, 'index'])->name('blog.index');
Route::get('/siasat/{url}', [BlogController::class, 'detail'])->name('blog.detail');
Route::get('kamus-hukum',[KamusController::class, 'kamus_hukum'])->name('kamus.hukum');
Route::get('kamus-hukum/{slug}',[KamusController::class, 'kamus_hukum_detail'])->name('kamus.hukum.detail');
Route::get('kamus-istilah-hukum',[KamusController::class, 'kamus_istilah_hukum'])->name('kamus.istilah.hukum');
Route::get('kamus-istilah-hukum/{slug}',[KamusController::class, 'kamus_istilah_hukum_detail'])->name('kamus.hukum.istilah.detail');

Route::get('istilah-hukum',[KamusController::class, 'istilah_hukum'])->name('kamus.istilah_hukum');

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
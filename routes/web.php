<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\KamusController;
use App\Http\Controllers\KbliController;

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
Route::get('kamus-update',[KamusController::class, 'update'])->name('kamus.update');

Route::get('istilah-hukum',[KamusController::class, 'istilah_hukum'])->name('kamus.istilah_hukum');

Route::get('kbli',[KbliController::class, 'index'])->name('kbli');

// Route::get('/{slug}/{url}', function ($slug,$url) {
//     if(View::exists($slug.'.'.$url)){
//         return view($slug.'.'.$url);
//     }else{
//         return view('404', compact('url'));
//     }
// });

$pages = \DB::table('page')->get(); 
foreach ($pages as $page) {
    $url = $page->url;    
    Route::any($page->url, function () use ($page) {       
        $data = [
            'description'=>$page->description,
            'image'=>$page->image,
            'keywords'=>$page->keywords,
            'content'=>$page->content,
            'title'=>$page->title
        ];        
        // echo ('page.'.$page->file);
        if(View::exists('page.'.$page->file)){            
           
            return view('page.'.$page->file,$data);
        }else{
            return view('page.page-global', $data);
        }
    });
}

Route::any('/{url}', function ($url) {       
    if(View::exists('page.'.$url)){
        return view('page.'.$url);
    }else{
        return view('404', compact('url'));
    }
});
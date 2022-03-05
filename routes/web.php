<?php

use App\Http\Controllers\adminislem;
use App\Http\Controllers\PostKontrol;
use Illuminate\Support\Facades\Route;

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
    return view('homepage');
})->name('homepage');

Route::get('/logo', function () {
    return view('logo');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard',[PostKontrol::class, 'Dashboard'])->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/admin',[adminislem::class, 'adminpaneli'])->name('paneladmin');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/uyepaneli',[adminislem::class, 'uyeleriListele'])->name('üye_paneli');
Route::middleware(['auth:sanctum', 'verified'])->get('/admin/uyedelete/{id}',[adminislem::class,'uyeSil'])->name('uye_delete');

Route::get('/api/allposts',[PostKontrol::class, 'AllPosts'])->name('allposts');
Route::middleware(['auth:sanctum', 'verified'])->post('/newpost', [PostKontrol::class, 'PostEkle'])->name('ProjeEkle');
Route::middleware(['auth:sanctum', 'verified'])->get('/postdelete/{id}', [PostKontrol::class, 'PostSil'])->name('postdelete');

Route::get('/image', function () {
    return view('logo');
});



Route::get('/aboutus', function () {
    return view('aboutus');
})->name('aboutus');

Route::get('/aboutproject', function () {
    return view('aboutproject');
})->name('aboutproject');

Route::get('/contactus', function () {
    return view('contactus');
})->name('contactus');

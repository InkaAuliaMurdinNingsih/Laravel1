<?php

use App\Http\Controllers\Authcontroller;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\inkacontroller;
use App\Http\Controllers\umkmController;
use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/belajar', function () {
    echo'<h1>Hello World</h1>';
    echo'<p>Sedang belajar Laravel</p>'; 
});

Route::get('/siswa/rpl/inka', function () {
    echo '<h2 style="text-align: center"><u>Welvome to Laravel, Inka</u></h2>';
});

Route::get('/guru', function () {
    return view('data_guru');
});

Route::get('/nama', function () {
    return 'saya inka siswa RPL';
});

Route::get('/siswa', function () {
    return  view('data_siswa');
});

Route::get('/sinau/{id}', function ($id) {
    return  "sinau ($id)";
});

Route::get('/home',function(){
    return view('home/index');
});

Route::get('/umkm', [umkmController::class, 'umkm']);

Route::get('/baca/{id}', [umkmController::class,'baca'])->name('baca');

//route dropdown
Route::get('/internet',function(){
    return view('tekno/internet');
});
Route::get('/game', function(){
    return view('tekno/game');
});

//route resource
Route::resource('/aulias',\App\Http\Controllers\inkacontroller::class);
Route::get('/tampil', [inkacontroller::class, 'tampil']);
Route::get('/tampil/search', [inkacontroller::class, 'search']);

//baca
Route::get('/tiktok', function(){
    return view('baca/tiktok');
});
Route::get('/satelit', function(){
    return view('baca/satelit');
});
Route::get('/nusantara', function(){
    return view('baca/nusantara');
});
Route::get('/ecommers', function(){
    return view('baca/shop');
});
Route::get('/transaksi', function(){
    return view('baca/transaksi');
});
Route::get('/pdsi', function(){
    return view('baca/pdsi');
});
Route::get('/walikota', function(){
    return view('baca/walikota');
});
Route::get('/gpt', function(){
    return view('baca/gpt');
});
Route::get('/genshin', function(){
    return view('baca/genshin');
});
Route::get('/ps', function(){
    return view('baca/ps');
});
Route::get('/marvel', function(){
    return view('baca/marvel');
});
Route::get('/roblox', function(){
    return view('baca/roblox');
});
Route::get('/minicraft', function(){
    return view('baca/minicraft');
});
Route::get('/gula', function(){
    return view('baca/gula');
});
Route::get('/IMA', function(){
    return view('baca/IMA');
});
Route::get('/handmade', function(){
    return view('baca/handmade');
});
Route::get('/coklat', function(){
    return view('baca/coklat');
});
Route::get('/radio', function(){
    return view('baca/radio');
});

//about
Route::get('/tentangKami', function(){
    return view('about');
});

//Login dan Regiser
Route::group(['middleware' => 'guest'], function(){
    Route::get('/register',[Authcontroller::class,'register'])->name('register');
    Route::post('/register',[Authcontroller::class,'registerPost'])->name('register.store');
    Route::get('/login',[Authcontroller::class,'login'])->name('login');
    Route::post('/login',[Authcontroller::class,'loginPost'])->name('login.store');
});

Route::group(['middleware' => 'auth'], function() {
    Route::delete('/logout', [Authcontroller::class, 'logout'])->name('logout');
});
Route::get('/home', [ HomeController::class, 'index']);
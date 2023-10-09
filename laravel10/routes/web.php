<?php

use Illuminate\Support\Facades\Route;

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

//Buat route ke halaman profile
Route::get("/profile", function(){
    return view("profile");
});

//route dengan parameter
Route::get("/mahasiswa/{nama}", function($nama = "Rafky"){
    echo "<h1>Hallo, nama Saya $nama</h1>";
});

//Route dengan paramaeter tidak wajib
Route::get("/mahasiswa2/{nama?}", function($nama = "Rafky"){
    echo "<h1>Hallo, Nama Saya $nama</h1>";
});

//route dengan parameter >1
Route::get("/profile/{nama?}/{pekerjaan?}", function($nama = "Rafky", $pekerjaan = "Mahasiswa"){
    echo "<h1>Hallo, nama Saya $nama, saya adalah seorang $pekerjaan</h1>";
});

//Redirect
Route::get("/hubungi", function(){
    echo "<h3>Hubungi kami </h3>";
});

Route::redirect("/contact","/hubungi");

//Route Dengan nama 
Route::get("/halo",function(){
    echo "<a href='".route('call'). "'>".route('call')."</a>";
});

//Group
//Memudahkan
Route::prefix("/mahasiswa")->group(function(){
    Route::get("/jadwal",function(){
        echo "<h3>Jadwal Mahasiswa</h3>";
    });
    Route::get("/materi",function(){
        echo "<h4>Materi Perkuliahan</h4>";
    });
});
<?php

use App\Http\Controllers\Dashboard\Chome;
use App\Http\Controllers\Details\CER;
use App\Http\Controllers\Details\COPD;
use App\Http\Controllers\Details\CVISIT;
use App\Http\Controllers\Kpi\CKPI;
use App\Http\Controllers\Kpi\Cmain;
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
    return view('pages.home.index');
});

Route::get('/home',[Chome::class,'index'])->name('home');
Route::get('/detail/visit',[CVISIT::class,'index'])->name('detail-visit');
Route::get('/detail/er',[CER::class,'index'])->name('detail-er');
Route::get('/detail/opd',[COPD::class,'index'])->name('detail-opd');



// show kpi
Route::get('/kpi',[CKPI::class,'index'])->name('kpi');

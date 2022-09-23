<?php

namespace App\Http\Controllers\Kpi;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CKPI extends Controller
{
    public function index(){
        return view('pages.kpi.main');
    }
}

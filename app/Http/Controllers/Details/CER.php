<?php

namespace App\Http\Controllers\Details;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CER extends Controller
{
    public function index(){
       
        return view('pages.details.pages.er.index');
    
    }
}

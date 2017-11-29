<?php

namespace App\Http\Controllers\Homepage2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PencarianController extends Controller
{
    public function index(){
    	return view('home-fix.pencarian.pencarian');
    }
}

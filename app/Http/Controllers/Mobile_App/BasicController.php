<?php

namespace App\Http\Controllers\Mobile_App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BasicController extends Controller
{
    public function index(){
    	return view('mobile-app.index');
    }
}

<?php

namespace App\Http\Controllers\Homepage2;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DetailVenueController extends Controller
{
    public function index(){
        return view('index-fix');
    }
}

<?php

namespace App\Http\Controllers\AdminVendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class VenueController extends Controller
{
    public function viewIndex(){
        return view('adminvendor.venue.venue');
    }
}

<?php

namespace App\Http\Controllers\AdminVendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function viewIndex(){
        return view('adminvendor.dashboard.dashboard');
    }
}

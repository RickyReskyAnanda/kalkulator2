<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function viewDashboard(){
        return view('adminpanel.dashboard.index');
    }
    public function viewProfil(){
        return view('adminpanel.profil');
    }

}
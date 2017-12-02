<?php

namespace App\Http\Controllers\Adminpanel\DataMaster;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LanggananController extends Controller
{
    public function viewLangganan(){
    	return view('adminpanel.datamaster.langganan');
    }
}

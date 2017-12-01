<?php

namespace App\Http\Controllers\Adminpanel\DataMaster;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AcaraController extends Controller
{
    public function viewAcara(){
    	return view('adminpanel.datamaster.acara');
    }
}

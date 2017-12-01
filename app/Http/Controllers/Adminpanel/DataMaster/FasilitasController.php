<?php

namespace App\Http\Controllers\Adminpanel\DataMaster;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FasilitasController extends Controller
{
    public function viewFasilitas(){
    	return view('adminpanel.datamaster.fasilitas');
    }
}

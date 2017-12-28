<?php

namespace App\Http\Controllers\Mobile_App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\EventModel;

class BasicController extends Controller
{
    public function index(){
    	$event = EventModel::all();
    	return view('mobile-app.index',compact('event'));
    }
}

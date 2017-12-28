<?php

namespace App\Http\Controllers\Mobile_App;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\RoomModel;
use App\Model\VenueModel;


class PencarianController extends Controller
{
    public function index(Request $request){

    	$data = RoomModel::join('venue','room.id_venue','venue.id_venue')
					->where('room.capacity','>',$request->min)
					->where('room.capacity','<',$request->max)
					->where('room.event','like','%'.$request->kegiatan.'%')
					->where('venue.city',$request->lokasi)
					->get();
    	return view('mobile-app.pencarian',compact('data','request'));
    }
}

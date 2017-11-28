<?php

namespace App\Http\Controllers\AdminVendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\RoomModel;
use App\Model\RoomRuleModel;
use App\Model\RoomOperationalModel;
class RoomController extends Controller
{
    public function viewIndex(){
        return view('adminvendor.room.room');
    }

    public function viewDetail($id){
        return view('adminvendor.room.detail');
    }

    //ADD
    // bagian untuk view tmbah
    //saat load modal
    // public function getAdd(Request $request,$rule,$id){
    //     if ($request->ajax()) {
    //         if($rule == 'rules'){
    //             $response = view('adminvendor.room.add.rules')->render();
    //         }
    //         return response()->json($response,200);
    //     }
    // }

    // public function addRules(Request $request,$id){
    //     if ($request->ajax()) {
    //         $this->validate($request, [
    //             'rule' => 'required|max:255'
    //             ]);

    //         $id = base64_decode($id);

    //         $RoomRuleModel = new RoomRuleModel;
    //         $RoomRuleModel->rule = $request->rule;
    //         $RoomRuleModel->id_room = $id;
    //         $RoomRuleModel->id_room = auth()->guard('vendor')->user()->id_room;
    //         $RoomRuleModel->save();

    //         $data = RoomRuleModel::where('id_room',$id)->get();
    //         $response = [
    //             'page' => view('adminvendor.room.view.rules',compact('data'))->render(),
    //             'timestamp' => microtime(true)
    //         ];
    //         return response()->json($response,200);
    //     }
    // }
    // CHANGE
    // bagian edit di detail room 
    // untuk load view modal
    // public function getEdit(Request $request,$rule,$id){
    //     if ($request->ajax()) {

    //         $id = base64_decode($id);
    //         if($rule == 'detail'){
    //             $data = RoomModel::find($id);
    //             $response = view('adminvendor.room.edit.detail',compact('data'))->render();
    //         }elseif($rule == 'price'){
    //             $data = RoomModel::find($id);
    //             $response = view('adminvendor.room.edit.price',compact('data'))->render();
    //         }elseif($rule == 'facility'){
    //             $data = RoomModel::find($id);
    //             $response = view('adminvendor.room.edit.facility',compact('data'))->render();
    //         }
    //         elseif($rule == 'function'){
    //             $data = RoomModel::find($id);
    //             $response = view('adminvendor.room.edit.function',compact('data'))->render();
    //         }
    //         elseif($rule == 'operational'){
    //             $data = RoomOperationalModel::where('id_room',$id)->get();
    //             // print_r($data[0]);die;
    //             $response = view('adminvendor.room.edit.operational',compact('data'))->render();
    //         }
    //         elseif($rule == 'rules'){
    //             $idrule = explode(',', $request->arr);
    //             $idrules = $request->arr;

    //             $rules = RoomRuleModel::whereIn('id_rule',$idrule)
    //                                     ->where('id_room', '=', $id)->get();
    //             $response = view('adminvendor.room.edit.rules',compact('rules','idrules'))->render();
    //         }
    //         elseif($rule == 'access'){
    //             $data = RoomModel::find($id);
    //             $response = view('adminvendor.room.edit.access' ,compact('data'))->render();
    //         }
    //         elseif($rule == 'description'){
    //             $data = RoomModel::find($id);
    //             $response = view('adminvendor.room.edit.description',compact('data'))->render();
    //         }
    //         return response()->json($response);
    //     }
    // }

    // public function updateDetail(Request $request,$id){
    //     if(csrf_token()==$request->_token){
    //         $this->validate($request, [
    //             'name'          => 'required|max:255|min:2',
    //             'room_code'     => 'required|max:100',
    //             'capacity'      => 'required|numeric',
	   //          'room_ceiling'  => 'required|numeric',
	   //          'room_long'  	=> 'required|numeric',
	   //          'room_width'    => 'required|numeric',
	   //          'floor'   		=> 'required',
	   //          'contact_number'=> 'required',
	   //          'contact_email' => 'required|email',
	   //      ]);

	   //      $RoomModel = RoomModel::find(base64_decode($id));

    //         $RoomModel->name   			= $request->name;
    //         $RoomModel->room_code  		= $request->room_code;
    //         $RoomModel->capacity  		= $request->capacity;
    //         $RoomModel->room_ceiling  	= $request->room_ceiling;
    //         $RoomModel->room_long 		= $request->room_long;
    //         $RoomModel->room_width 		= $request->room_width;
    //         $RoomModel->floor 			= $request->floor;
    //         $RoomModel->contact_number 	= $request->contact_number;
    //         $RoomModel->contact_email 	= $request->contact_email;

    //         $RoomModel->save();

    //         $data = $RoomModel;
    //         $response = [
    //             'page' => view('adminvendor.room.view.detail',compact('data'))->render(),
    //             'timestamp' => microtime(true)
    //         ];
    //         return response()->json($response,200);

	   //  }
    // }


    // public function updatePrice(Request $request,$id){
    //     if(csrf_token()==$request->_token){
    //         $this->validate($request, [
    //             'ishourly'          => 'required|numeric',
    //             'isdaily'           => 'required|numeric',
    //             'isweekly'          => 'required|numeric',
    //             'ismonthly'         => 'required|numeric',
    //             'isfullboard'       => 'required|numeric',
    //             'isfullday'         => 'required|numeric',
    //             'ishalfday'         => 'required|numeric',
    //             'hourprice'         => 'required|numeric',
    //             'dayprice'          => 'required|numeric',
    //             'weekprice'         => 'required|numeric',
    //             'monthprice'        => 'required|numeric',
    //             'fullboardprice'    => 'required|numeric',
    //             'fulldayprice'      => 'required|numeric',
    //             'halfdayprice'      => 'required|numeric',
    //         ]);

    //         // return $request->all();die;
    //         $RoomModel = RoomModel::find(base64_decode($id));

    //         $RoomModel->is_hourly           = $request->ishourly;
    //         $RoomModel->is_daily            = $request->isdaily;
    //         $RoomModel->is_weekly           = $request->isweekly;
    //         $RoomModel->is_monthly          = $request->ismonthly;
    //         $RoomModel->is_fullboard        = $request->isfullboard;
    //         $RoomModel->is_fullday          = $request->isfullboard;
    //         $RoomModel->is_halfday          = $request->ishalfday;
    //         if($request->ishourly=='1' )     $RoomModel->hour_price          = $request->hourprice;
    //         if($request->isdaily=='1')      $RoomModel->main_price          = $request->dayprice;
    //         if($request->isweekly=='1')     $RoomModel->week_price          = $request->weekprice;
    //         if($request->ismonthly=='1')    $RoomModel->month_price         = $request->monthprice;
    //         if($request->isfullboard=='1')  $RoomModel->fullboard_price     = $request->fullboardprice;
    //         if($request->isfullday=='1')    $RoomModel->fullday_price       = $request->fulldayprice;
    //         if($request->ishalfday=='1')    $RoomModel->halfday_price       = $request->halfdayprice;

    //         $RoomModel->save();

    //         $data = $RoomModel;

    //         $response = [
    //             'page' => view('adminvendor.room.view.price',compact('data'))->render(),
    //             'timestamp' => microtime(true)
    //         ];
    //         return response()->json($response,200);
    //     }

    // }

    // public function updateFunction(Request $request,$id){
    //     if(csrf_token()==$request->_token){
    //         $this->validate($request, [
    //             'function' => 'max:255',
    //         ]);

    //         $data = explode(',', $request->function);

    //         for ($i=0; $i < count($data); $i++) { 
    //             $data[$i]=ucfirst($data[$i]);
    //         }

    //         $data1=implode(',', $data);

    //         RoomModel::where('id_room',base64_decode($id))->update(['room_usage' => $data1]);

    //         $response = [
    //             'page' => view('adminvendor.room.view.function',compact('data'))->render(),
    //             'timestamp' => microtime(true)
    //         ];
    //         return response()->json($response,200);
    //     }
    // }

    // public function updateFacility(Request $request,$id){
    //     if(csrf_token()==$request->_token){
    //         $this->validate($request, [
    //             'facility' => 'max:400',
    //         ]);

    //         $data = explode(',', $request->facility);

    //         for ($i=0; $i < count($data); $i++) { 
    //             $data[$i]=ucfirst($data[$i]);
    //         }

    //         $data1=implode(',', $data);

    //         RoomModel::where('id_room',base64_decode($id))->update(['room_facility' => $data1]);

    //         $response = [
    //             'page' => view('adminvendor.room.view.function',compact('data'))->render(),
    //             'timestamp' => microtime(true)
    //         ];
    //         return response()->json($response,200);
    //     }
    // }

    // public function updateOperational(Request $request,$id){
    //     if(csrf_token()==$request->_token){

    //         $this->validate($request, [
    //             'monday'        => 'required|numeric|max:1|min:0',
    //             'tuesday'       => 'required|numeric|max:1|min:0',
    //             'wednesday'     => 'required|numeric|max:1|min:0',
    //             'thursday'      => 'required|numeric|max:1|min:0',
    //             'friday'        => 'required|numeric|max:1|min:0',
    //             'saturday'      => 'required|numeric|max:1|min:0',
    //             'sunday'        => 'required|numeric|max:1|min:0',
    //         ]);


    //         $monday = array(
    //             'active'    => $request->monday,
    //             'start'     => $request->startmonday,
    //             'end'       => $request->endmonday,
    //             );
    //         $tuesday = array(
    //             'active'    => $request->tuesday,
    //             'start'     => $request->starttuesday,
    //             'end'       => $request->endtuesday,
    //             );
    //         $wednesday = array(
    //             'active'    => $request->wednesday,
    //             'start'     => $request->startwednesday,
    //             'end'       => $request->endwednesday,
    //             );
    //         $thursday = array(
    //             'active'    => $request->thursday,
    //             'start'     => $request->startthursday,
    //             'end'       => $request->endthursday,
    //             );
    //         $friday = array(
    //             'active'    => $request->friday,
    //             'start'     => $request->startfriday,
    //             'end'       => $request->endfriday,
    //             );
    //         $saturday = array(
    //             'active'    => $request->saturday,
    //             'start'     => $request->startsaturday,
    //             'end'       => $request->endsaturday,
    //             );
    //         $sunday = array(
    //             'active'    => $request->sunday,
    //             'start'     => $request->startsunday,
    //             'end'       => $request->endsunday,
    //             );

    //         RoomOperationalModel::where('day','monday')    ->update($monday);
    //         RoomOperationalModel::where('day','tuesday')   ->update($tuesday);
    //         RoomOperationalModel::where('day','wednesday') ->update($wednesday);
    //         RoomOperationalModel::where('day','thursday')  ->update($thursday);
    //         RoomOperationalModel::where('day','friday')    ->update($friday);
    //         RoomOperationalModel::where('day','saturday')  ->update($saturday);
    //         RoomOperationalModel::where('day','sunday')    ->update($sunday);


    //         $data = RoomOperationalModel::where('id_room',base64_decode($id))->get();

    //         $response = [
    //             'page' => view('adminvendor.room.view.operational',compact('data'))->render(),
    //             'timestamp' => microtime(true)
    //         ];
    //         return response()->json($response,200);
    //     }
    // }

    // public function updateRules(Request $request,$id){
    //     if(csrf_token()==$request->_token){

    //         $idrule = explode(',',$request->idrule);

    //         for ($i=0; $i < count($idrule); $i++) { 
    //             RoomRuleModel::where('id_rule',$idrule[$i])->update(['rule' => $_POST[$idrule[$i]]]);
    //         }

    //         $data = RoomRuleModel::where('id_room',base64_decode($id))->get();
    //         $response = [
    //             'page' => view('adminvendor.room.view.rules',compact('data'))->render(),
    //             'timestamp' => microtime(true)
    //         ];
    //         return response()->json($response,200);
    //     }
    // }

    // public function updateAccess(Request $request,$id){
    //     if(csrf_token()==$request->_token){

    //         $this->validate($request, [
    //             'access' => 'max:2000'
    //         ]);
    //         RoomModel::where('id_room',base64_decode($id))->update(['room_access' =>$request->access]);


    //         return response()->json('<p>'.ucfirst($request->access).'</p>',200);
    //     }
    // }
    
    // public function updateDescription(Request $request,$id){
    //     if(csrf_token()==$request->_token){
    //         $this->validate($request, [
    //             'description' => 'max:2000',
    //         ]);

    //         RoomModel::where('id_room',base64_decode($id))->update(['description' =>ucfirst($request->description)]);

    //         return response()->json('<p>'.ucfirst($request->description).'</p>',200);
    //     }
    // }
}

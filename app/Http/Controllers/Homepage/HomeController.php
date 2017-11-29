<?php

namespace App\Http\Controllers\Homepage;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\ViewSearchModel;
use App\Model\RegencyModel;
use App\Model\ProvinceModel;
use App\Model\RegencyCooperateModel;
use App\Model\RoomModel;
use App\Model\RoomPhotoModel;
use App\Model\RoomUsageModel;
use App\Model\RoomFacilityModel;
use App\Model\RoomOperationalModel;
use App\Model\VenueModel;
use App\Model\RoomTypeModel;
use App\Model\EventModel;
use App\Model\RelationEventRoomModel;
use App\Model\SettingModel;

class HomeController extends Controller
{
    public function index(){
        $setting  = SettingModel::find(1);
        $regencyCooperate   = RegencyCooperateModel::orderBy('name','asc')->get();
        $event              = EventModel::orderBy('sort_number','asc')->get();
        return view('home.home',compact('regencyCooperate','event','setting'));
    }
        

    public function search(Request $request){
        $setting  = SettingModel::find(1);
        $regencyCooperate   = RegencyCooperateModel::orderBy('name','asc')->get();
        $roomType           = RoomTypeModel::where('category','event')->orderBy('type_name','asc')->get();
        $event              = EventModel::orderBy('sort_number','asc')->get();
        return view('home.search',compact('request','regencyCooperate','roomType','event','setting'));
    }

    public function dataSearch(Request $request){
        
        $location   = $request->location;
        $capacity   = $request->capacity;
        $sorting    = $request->sorting;
        $venue_type = $request->venue_type;
        $activity   = $request->activity;

        $first_capacity = 0;
        $last_capacity = 0;
        if($capacity==2){
            $first_capacity = 0;
            $last_capacity = 30;
        }elseif($capacity==3){
            $first_capacity = 30;
            $last_capacity = 100;
        }elseif($capacity==4){
            $first_capacity = 100;
            $last_capacity = 200;
        }elseif($capacity==5){
            $first_capacity = 200;
            $last_capacity = 10000;
        }else{
            $first_capacity = 0;
            $last_capacity = 10000;
        }

        $room = [];

        if($venue_type == 0){
            if($sorting == 2){
                $room = RoomModel::join('venue', 'room.id_venue', '=', 'venue.id_venue')
                        ->join('room_type','room.id_room_type','=','room_type.id_room_type')
                        ->join('area_regency', 'venue.city', '=', 'area_regency.id')
                        ->where('city',$location)
                        ->where('capacity','>=',$first_capacity)
                        ->where('capacity','<=',$last_capacity)
                        ->orderBy('main_price', 'asc')
                        ->limit(10)
                        ->get();
            }elseif($sorting == 3){
                $room = RoomModel::join('venue', 'room.id_venue', '=', 'venue.id_venue')
                        ->join('room_type','room.id_room_type','=','room_type.id_room_type')
                        ->join('area_regency', 'venue.city', '=', 'area_regency.id')
                        ->where('city',$location)
                        ->where('capacity','>=',$first_capacity)
                        ->where('capacity','<=',$last_capacity)
                        ->orderBy('capacity', 'desc')
                        ->limit(10)
                        ->get();
            }elseif($sorting == 4){
                $room = RoomModel::join('venue', 'room.id_venue', '=', 'venue.id_venue')
                        ->join('room_type','room.id_room_type','=','room_type.id_room_type')
                        ->join('area_regency', 'venue.city', '=', 'area_regency.id')
                        ->where('city',$location)
                        ->where('capacity','>=',$first_capacity)
                        ->where('capacity','<=',$last_capacity)
                        ->orderBy('capacity', 'asc')
                        ->limit(10)
                        ->get();
            }else{
                $room = RoomModel::join('venue', 'room.id_venue', '=', 'venue.id_venue')
                        ->join('room_type','room.id_room_type','=','room_type.id_room_type')
                        ->join('area_regency', 'venue.city', '=', 'area_regency.id')
                        ->where('city',$location)
                        ->where('capacity','>=',$first_capacity)
                        ->where('capacity','<=',$last_capacity)
                        ->orderBy('main_price', 'desc')
                        ->limit(10)
                        ->get();
            }
        }else{
            if($sorting == 2){
                $room = RoomModel::join('venue', 'room.id_venue', '=', 'venue.id_venue')
                        ->join('room_type','room.id_room_type','=','room_type.id_room_type')
                        ->join('area_regency', 'venue.city', '=', 'area_regency.id')
                        ->where('city',$location)
                        ->where('capacity','>=',$first_capacity)
                        ->where('capacity','<=',$last_capacity)
                        ->where('room.id_room_type',$venue_type)
                        ->orderBy('main_price', 'asc')
                        ->limit(10)
                        ->get();
            }elseif($sorting == 3){
                $room = RoomModel::join('venue', 'room.id_venue', '=', 'venue.id_venue')
                        ->join('room_type','room.id_room_type','=','room_type.id_room_type')
                        ->join('area_regency', 'venue.city', '=', 'area_regency.id')
                        ->where('city',$location)
                        ->where('capacity','>=',$first_capacity)
                        ->where('capacity','<=',$last_capacity)
                        ->where('room_type_id',$venue_type)
           
                        ->orderBy('capacity', 'desc')
                        ->limit(10)
                        ->get();
            }elseif($sorting == 4){
                $room = RoomModel::join('venue', 'room.id_venue', '=', 'venue.id_venue')
                        ->join('room_type','room.id_room_type','=','room_type.id_room_type')
                        ->join('area_regency', 'venue.city', '=', 'area_regency.id')
                        ->where('city',$location)
                        ->where('capacity','>=',$first_capacity)
                        ->where('capacity','<=',$last_capacity)
                        ->where('room.id_room_type',$venue_type)
                        ->orderBy('capacity', 'asc')
                        ->limit(10)
                        ->get();
            }else{
                $room = RoomModel::join('venue', 'room.id_venue', '=', 'venue.id_venue')
                        ->join('room_type','room.id_room_type','=','room_type.id_room_type')
                        ->join('area_regency', 'venue.city', '=', 'area_regency.id')
                        ->where('city',$location)
                        ->where('capacity','>=',$first_capacity)
                        ->where('capacity','<=',$last_capacity)
                        ->where('room.id_room_type',$venue_type)
                        ->orderBy('main_price', 'desc')
                        ->limit(10)
                        ->get();
            }
        }

        /*data idroom unique*/
        if($activity!=0){
            $data_id_room = array();
            for ($i=0; $i < count($room); $i++) { 
                if($i==0){
                    array_push($data_id_room,$room[0]->id_room);
                }elseif($i>0){
                    $sama = 0; 
                    for ($a=0; $a < count($data_id_room); $a++) {
                        if($data_id_room[$a] == $room[$i]->id_room){
                            $sama++;
                        }
                    }
                    if($sama<1){
                        array_push($data_id_room,$room[$i]->id_room);
                    }
                }
            }
            
            /*data relation event and room*/
            $relation_er = RelationEventRoomModel::whereIn('id_room',$data_id_room)
                                                ->where('id_event',$activity)
                                                ->get(['id_room']);

            /*proses pencocokan data relasi dan room*/                                                
            $rooms = array();                                                
            for ($a=0; $a < count($relation_er); $a++) { 
                for ($i=0; $i < count($room); $i++) { 
                    if($relation_er[$a]->id_room == $room[$i]->id_room){
                        array_push($rooms, $room[$i]);
                    }
                }
            }
            $room=$rooms;
        }

        for ($i=0; $i < count($room); $i++) { 
            $room[$i]->link_detail  = url('room/'.str_replace(' ', '-', $room[$i]->name).'.'.base64_encode($room[$i]->id_room));
            $room[$i]->img_link     = $room[$i]->image;
            $room[$i]->id_room      = base64_encode($room[$i]->id_room);
            $room[$i]->id_venue     = base64_encode($room[$i]->id_venue);
            $room[$i]->main_price   = number_format($room[$i]->main_price,0,",",".");
        }
        return response()->json($room,200);
    }

    public function roomDetail($name,$id){
        $setting  = SettingModel::find(1);
        $id = base64_decode($id);
        $data = RoomModel::find($id);
        
        // return $data->roomType;
        return view('home.venue-detail',compact('data','setting'));
    }

    /*Reservasi*/
    public function reservationCheck(){
        $setting  = SettingModel::find(1);
        return view('home.reservation-check',compact('setting'));
    }
    public function reservationStatus(){
        $setting  = SettingModel::find(1);
        return view('home.reservation-status',compact('setting'));
    }

    /*partnership*/
    public function beAPartner(){

        $setting  = SettingModel::find(1);
        $province = ProvinceModel::all();
        return view('home.be-a-partner',compact('setting','province'));
    }
        public function postPartner(Request $request){
            $this->validate($request, [
                'nama'      => 'required|max:255',
                'email'     => 'required|email',
                'notelp'    => 'required|numeric',
                'posisi'    => 'required',
                'properti'  => 'required',
                'provinsi'  => 'required|numeric',
                'kabupaten' => 'required|numeric',
                'kecamatan' => 'required|numeric',
                'alamat'    => 'required|max:500',
                'informasi' => 'required'
            ]);

            $data = new VenueModel;
            $data->contact_name     = $request->nama;
            $data->contact_email    = $request->email;
            $data->contact_number   = $request->notelp;
            $data->contact_position = $request->posisi;
            $data->venue_name       = $request->properti;
            $data->province         = $request->provinsi;
            $data->city             = $request->kabupaten;
            $data->district         = $request->kecamatan;
            $data->address          = $request->alamat;
            $data->information      = $request->informasi;
            $data->cooperate        = '2';
            $data->save();
            return redirect('jadi-partner')->with('status', 'Berhasil menginput data !');
        }

    /*statis*/
    public function termCondition(){
        $setting  = SettingModel::find(1);
        return view('home.term-condition',compact('setting'));
    }
    public function howToBook(){
        $setting  = SettingModel::find(1);
        return view('home.how-to-book',compact('setting'));
    }
    public function help(){
        $setting  = SettingModel::find(1);
        return view('home.help',compact('setting'));
    }
    public function about(){
        $setting  = SettingModel::find(1);
        return view('home.about',compact('setting'));
    }
    public function input(){
        $xml = file_get_contents(url('penuh.json'));
        $xml = (array) json_decode($xml);

        $xml = $xml['objects'];

        $use = array();

        for ($i=0; $i < count($xml); $i++) { 
            for ($a=0; $a < count($xml[$i]->rooms); $a++) { 
                foreach ($xml[$i]->rooms[$a]->usages as $usages){
                    if(count($use)>0){
                        $jumlah = 0;
                        for ($x=0; $x < count($use); $x++) { 
                            if($use[$x]->id == $usages->id){
                                $jumlah++;
                            }
                        }
                        if($jumlah<1)array_push($use,$usages);
                    }else{
                        array_push($use,$usages);
                    }
                }
            }
        }
        
        return $use;
    }

    public function output(Request $request){
        $xml = file_get_contents(url('penuh.json'));
        $xml = (array) json_decode($xml);

        $xml = $xml['objects'];
        $i=0;
        foreach($xml as $xms) { 
            $i++;
            if($i>120){
                $VenueModel = new VenueModel;
                $VenueModel->venue_name         = $xms->name;
                $VenueModel->address            = $xms->address;
                $VenueModel->district           = 1;
                $VenueModel->city               = '7371';
                $VenueModel->province           = 1; 
                $VenueModel->information        = "s";
                $VenueModel->contact_number     = "s";
                $VenueModel->contact_email      = "default@email.com";
                $VenueModel->cooperate          = '0';
                $VenueModel->password           = bcrypt('password');
                $VenueModel->pw                 = 'password';
                $VenueModel->distance           = $xms->distance;
                $VenueModel->distance_unit      = $xms->distance_unit;
                $VenueModel->lat                = $xms->lat;
                $VenueModel->lon                = $xms->lon;
                $VenueModel->lowest_room_price  = $xms->lowest_room_price;
                $VenueModel->remember_token     = bcrypt('password');
                $VenueModel->photo              = $xms->picture;

                $VenueModel->save();
                
                foreach ($xms->rooms as $room) {
                    $RoomModel = new RoomModel;
                    $RoomModel->id_venue        = $VenueModel->id_venue;
                    $RoomModel->capacity        = $room->capacity;
                    $RoomModel->contact_email   = $room->contact_email;
                    $RoomModel->contact_number  = preg_replace('/[^A-Za-z0-9\-]/', '', $room->contact_number);
                    $RoomModel->fullday_price   = $room->fullday_price;
                    $RoomModel->halfday_price   = $room->halfday_price;
                    $RoomModel->is_daily        = $room->is_daily;
                    $RoomModel->is_food_allowed = $room->is_food_allowed;
                    $RoomModel->is_fullboard    = $room->is_wholeday;
                    $RoomModel->is_fullday      = $room->is_fullday;
                    $RoomModel->is_halfday      = $room->is_halfday;
                    $RoomModel->is_hourly       = $room->is_hourly;
                    $RoomModel->is_monthly      = $room->is_monthly;
                    $RoomModel->is_published    = $room->is_published;
                    $RoomModel->is_verified     = $room->is_verified;
                    $RoomModel->main_price      = $room->price_per_hour;
                    $RoomModel->room_code       = $room->name;

                    if($room->room_type_id==1)$RoomModel->id_room_type    = 11;
                    elseif($room->room_type_id==2)$RoomModel->id_room_type    = 12;
                    elseif($room->room_type_id==3)$RoomModel->id_room_type    = 13;
                    elseif($room->room_type_id==4)$RoomModel->id_room_type    = 10;
                    elseif($room->room_type_id==5)$RoomModel->id_room_type    = 15;
                    elseif($room->room_type_id==6)$RoomModel->id_room_type    = 14;

                    $RoomModel->name            = $room->name;
                    $RoomModel->day_price       = $room->price_per_day;
                    $RoomModel->hour_price      = $room->price_per_hour;
                    $RoomModel->month_price     = $room->price_per_month;
                    $RoomModel->room_size       = $room->room_size;
                    if(count($room->picture)>0)
                    $RoomModel->image           = $room->picture[0];
                    $RoomModel->save();

                    foreach ($room->operational_hours as $op) {
                        $roomOP                 = new RoomOperationalModel;
                        $roomOP->id_room        = $RoomModel->id_room;
                        $roomOP->id_venue       = $VenueModel->id_venue;
                        $roomOP->day            = $op->day;
                        $roomOP->start          = $op->start;
                        $roomOP->end            = $op->time_end;
                        $roomOP->save();
                    }

                    foreach ($room->facilities as $facilities) {
                        $roomFacility                   = new RoomFacilityModel;
                        $roomFacility->id_room          = $RoomModel->id_room;
                        $roomFacility->id_venue         = $VenueModel->id_venue;
                        $roomFacility->icon_url         = $facilities->icon_url;
                        $roomFacility->name             = $facilities->name;
                        $roomFacility->price_perday     = $facilities->price_per_day;
                        $roomFacility->price_perhour    = $facilities->price_per_hour;
                        $roomFacility->free             = 1;
                        $roomFacility->is_deleted             = 0;
                        $roomFacility->save();
                    }

                    foreach ($room->picture as $picture) {
                        $roomPhoto              = new RoomPhotoModel;
                        $roomPhoto->id_room     = $RoomModel->id_room;
                        $roomPhoto->id_venue    = $VenueModel->id_venue;
                        $roomPhoto->name        = "Ceklokasi.id";
                        $roomPhoto->url         = $picture;
                        $roomPhoto->status      = 'show';
                        $roomPhoto->save();
                    }
                    foreach ($room->usages as $usages) {
                        $roomUsage = new RoomUsageModel;
                        $roomUsage->id_room = $RoomModel->id_room;
                        $roomUsage->name = $usages->name;
                        $roomUsage->save();
                    }
                }
            }

        }
    }

}

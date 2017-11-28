<?php

namespace App\Http\Controllers\Api\Secure;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//model
use App\Model\ProvinceModel;
use App\Model\RegencyModel;
use App\Model\DistrictModel;


class RegionController extends Controller
{
	public function getRegency($id){
         $data = RegencyModel::where('province_id',$id)->get();
         return response()->json($data,200);
   }

   public function getDistrict($id){
         $data = DistrictModel::where('regency_id',$id)->get();
         return response()->json($data,200);
   }

     
}

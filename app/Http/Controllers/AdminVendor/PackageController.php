<?php

namespace App\Http\Controllers\AdminVendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Model\PackageModel;
use App\Model\PackageDetailModel;

class PackageController extends Controller
{
    public function viewIndex(){
        return view('adminvendor.package.package');
    }

    public function viewAdd(){
        return view('adminvendor.package.add');	
    }

    public function viewUpdate(){
        return view('adminvendor.package.update'); 
    }

 
	// public function create(Request $request, $content=null){
 //        if(csrf_token()==$request->_token){

 //        	if ($request->ajax()) {
	//         	$this->validate($request, [
	//                 'name'        	=> 'required',
	//                 'package'      	=> 'required|numeric|max:1|min:0',
	//                 'from'        	=> 'required|max:10',
	//                 'to'        	=> 'required|max:10',
	//             ]);
	        	
 //        		$PackageModel = new PackageModel;

 //        		$PackageModel->name 			= $request->name; 
 //        		$PackageModel->single_package 	= $request->package; 
 //        		$PackageModel->active 			= 'Pending'; 
	//     		$PackageModel->start 			= $request->from; 
 //        		$PackageModel->end 				= $request->to;
 //        		$PackageModel->status 			= 'list'; // !!!! masih bermasalah dengan seleksi ongoing ato list karena soal waktu 
 //        		$PackageModel->id_venue 		= auth()->guard('vendor')->user()->id_venue;

 //        		$PackageModel->save();

	//             $response = [
	//                  'id' => base64_encode($PackageModel->id_package),
	//                  'timestamp' => microtime(true)
	//              ];
	//             return response()->json($response);
 //        	}
 //        }
 //    }

 //    public function update(Request $request, $content=null){
 //    	if(!is_null($content)) {
 //            if ($request->ajax()) {

 //                $response = [
 //                     'page' => view('adminvendor.package.package')->render(),
 //                     'timestamp' => microtime(true)
 //                 ];
 //                return response()->json($response);
 //            }
 //        }
 //        return view('adminvendor.index');	
 //    }

 //    public function delete(Request $request, $content=null){
 //    	if(!is_null($content)) {
 //            if ($request->ajax()) {

 //                $response = [
 //                     'page' => view('adminvendor.package.package')->render(),
 //                     'timestamp' => microtime(true)
 //                 ];
 //                return response()->json($response);
 //            }
 //        }
 //        return view('adminvendor.index');	
 //    }

/*
*	-------------------------
*	detail package
*/
    public function getDetail(Request $request,$id, $content=null){
        return view('adminvendor.package.detail');
    }
    // public function createDetail(Request $request,$id,$kind,$content=null){
    // 	if(!is_null($content) && $request->ajax()==true && csrf_token()==$request->_token) {
    //         if ($request->ajax()) {
	   //      	$this->validate($request, [
	   //      		'send' => 'required|min:5'
	   //      		]);

	   //      	$send 	= explode(',',$request->send);
	   //      	$detail = 'details';
	   //      	if($kind=='detail')				$detail = $send[0];
	   //      	elseif($kind=='information')	$detail = $send[1];
	   //      	elseif($kind=='payment-rule')	$detail = $send[2];
	   //      	elseif($kind=='charge')			$detail = $send[3];

    //         	$idPackage = base64_decode($id);

    //         	$data = new PackageDetailModel;

    //         	$data->id_package 	= $idPackage;
    //         	$data->id_venue 	= auth()->guard('vendor')->user()->id_venue;
    //         	$data->detail 		= ucfirst($detail);
    //         	$data->kind 		= $kind;
    //         	$data->is_sub_detail_package = 0;
            	
    //         	$data->save();

    //             return response()->json($data,201);
    //         }
    //     }
    // }    
}

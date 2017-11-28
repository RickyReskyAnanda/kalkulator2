<?php

namespace App\Http\Controllers\Api\Secure;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\VenueModel;
use App\Transformers\VenueTransformer;
use Image;
use File;

class VenueController extends Controller
{
    public function getVenue(){
    	$data = VenueModel::all();


    	$data = fractal()
    			->collection($data)
    			->transformWith(new VenueTransformer)
    			->toArray();
    	return response()->json($data,200);
    }

    public function postVenue(Request $request,VenueModel $VenueModel){
    	$this->validate($request,
    		[
				'nama' 			=> 'required',
				'alamat' 		=> 'required|max:255',
				'kecamatan' 	=> 'required',
				'kabupaten'		=> 'required',
				'provinsi'		=> 'required',
				'informasi'		=> 'required',
				'nomor'			=> 'required|max:15|min:7',
                'foto'          => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

            ]);

        $VenueModel->name 			= $request->nama;
        $VenueModel->address 		= $request->alamat;
        $VenueModel->district       = $request->kecamatan;
        $VenueModel->city           = $request->kabupaten;
        $VenueModel->province       = $request->provinsi; 
        $VenueModel->information    = $request->informasi;
        $VenueModel->contact_number = $request->nomor;
        $VenueModel->contact_email  = $request->email;
        $VenueModel->api_token      = bcrypt($request->nomor);
        $VenueModel->cooperate      = $request->kerjasama;
        $VenueModel->password       = bcrypt($request->nomor);
        $VenueModel->pw             = $request->nomor;


        if($request->hasFile('foto')){
            $VenueModel->photo = date('Ymdhis').'.'.$request->foto->getClientOriginalExtension();
            //upload image 
            $request->foto->move(public_path('images/venue/'),$VenueModel->photo);

            //resize image
            $pathFind = public_path('images/venue/'.$VenueModel->photo);
            $pathSave = public_path('images/venue/thumb/'.$VenueModel->photo);
            Image::make($pathFind)->resize(200,200)->save($pathSave);
        }else{
            $VenueModel->photo = 'default.jpg';
            
        }
        // save to databases
        $VenueModel->save();

        return response()->json($VenueModel,201);
    }

    public function updateVenue(Request $request, $id){
    	$this->validate($request,
    		[
				'nama' 			=> 'required',
				'alamat' 		=> 'required|max:255',
				'kecamatan' 	=> 'required',
				'kabupaten'		=> 'required',
				'provinsi'		=> 'required',
				'informasi'		=> 'required',
				'nomor'			=> 'required|max:15|min:7'
            ]);


        $VenueModel = VenueModel::find($id);

        $VenueModel->name 			= $request->get('nama',$VenueModel->name);
        $VenueModel->address 		= $request->get('alamat',$VenueModel->address);
        $VenueModel->photo 			= 'default.jpg';
        $VenueModel->district 		= $request->get('kecamatan',$VenueModel->district);
        $VenueModel->city 			= $request->get('kabupaten',$VenueModel->city);
        $VenueModel->province 		= $request->get('provinsi',$VenueModel->province); 
        $VenueModel->information 	= $request->get('informasi',$VenueModel->information);
        $VenueModel->contact_number = $request->get('nomor',$VenueModel->contact_number);
        $VenueModel->contact_email 	= $request->get('email',$VenueModel->contact_email);
        $VenueModel->cooperate 		= $request->get('cooperate',$VenueModel->cooperate);

        $VenueModel->save();

    	$data = fractal()
        		->item($VenueModel)
        		->transformWith(new VenueTransformer)
        		->toArray();;
        return response()->json($data,201);
    }

    public function destroyVenue(VenueModel $id){
    	$id->delete();
    	return response()->json([
    			'message' => 'Data berhasil dihapus'
    		],200);
    }
}

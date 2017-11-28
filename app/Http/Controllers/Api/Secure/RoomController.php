<?php
namespace App\Http\Controllers\Api\Secure;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\RoomModel;
use App\Transformers\RoomTransformer;


class RoomController extends Controller
{
    public function getRoom(){
    	$data = RoomModel::all();


    	$data = fractal()
    			->collection($data)
    			->transformWith(new RoomTransformer)
    			->toArray();
    	return response()->json($data,200);
    }

    public function getDetailRoom($id){
    	$data = RoomModel::find($id);


    	$data = fractal()
    			->item($data)
    			->transformWith(new RoomTransformer)
    			->toArray();

    	return response()->json($data,200);
    }

    public function postRoom(Request $request,RoomModel $RoomModel){
    	$this->validate($request,
    		[
				'venueid' 				=> 'required', 		
				'nama'	 				=> 'required|max:255',	 		
				'kode_ruangan'			=> 'required|max:20',
				'kapasitas' 			=> 'required|numeric',	
				'email'					=> 'required|email',	
				'nomor'					=> 'required|numeric',			
				'harga_seharian'		=> 'required|numeric',
				'harga_setengah_hari' 	=> 'required|numeric',
				'harga_sehari_penuh'	=> 'required|numeric',
				'perhari'				=> 'required|numeric',
				'perharian'				=> 'required|numeric',		
				'persetengah_hari'		=> 'required|numeric',
				'perjam'				=> 'required|numeric',
				'perbulan'				=> 'required|numeric',
				'sehari_penuh'			=> 'required|numeric',
				'makanan_dibolehkan'	=> 'required|numeric',
				'harga_asli'			=> 'required|numeric',
				// 'foto'					=> 'required|file',	
				'panjang_ruangan'		=> 'required|numeric',
				'lebar_ruangan'			=> 'required|numeric',
				'tinggi_ruangan'		=> 'required|numeric',
				// 'jenis_ruangan_id'		=> 'required',
				'ada_model'				=> 'required|numeric',
				'ada_paket'				=> 'required|numeric',		
				'kerjasama'				=> 'required|numeric',		
				'peraturan'				=> 'required',		
				'akses_ruangan'			=> 'required',
				'deskripsi'				=> 'required',
			]);

    	
		$RoomModel->id_venue 		=>  $request->venueid;
		$RoomModel->name 			=>  $request->nama;
		$RoomModel->room_code 		=>  $request->kode_ruangan;
		$RoomModel->capacity 		=>  $request->kapasitas;
		$RoomModel->contact_email 	=>  $request->email;
		$RoomModel->contact_number 	=>  $request->nomor;
		$RoomModel->fullday_price 	=>  $request->harga_seharian;
		$RoomModel->halfday_price 	=>  $request->harga_setengah_hari;
		$RoomModel->wholeday_price 	=>  $request->harga_sehari_penuh;
		$RoomModel->is_daily 		=>  $request->perhari;
		$RoomModel->is_fullday 		=>  $request->perharian;
		$RoomModel->is_halfday 		=>  $request->persetengah_hari;
		$RoomModel->is_hourly 		=>  $request->perjam;
		$RoomModel->is_monthly 		=>  $request->perbulan;
		$RoomModel->is_wholeday 	=>  $request->sehari_penuh;
		$RoomModel->is_food_allowed =>  $request->makanan_dibolehkan;
		$RoomModel->main_price 		=>  $request->harga_asli;
		$RoomModel->image 			=>  $request->foto;
		$RoomModel->room_long 		=>  $request->panjang_ruangan;
		$RoomModel->room_width 		=>  $request->lebar_ruangan;
		$RoomModel->room_type_id 	=>  $request->jenis_ruangan_id;
		$RoomModel->room_ceiling 	=>  $request->tinggi_ruangan;
		$RoomModel->is_room_style 	=>  $request->ada_model;
		$RoomModel->is_package 		=>  $request->ada_paket;
		$RoomModel->is_cooperate 	=>  $request->kerjasama;
		$RoomModel->room_regulation =>  $request->peraturan;
		$RoomModel->room_access 	=>  $request->akses_ruangan;
		$RoomModel->description 	=>  $request->deskripsi;

        $RoomModel->save();

        $data = fractal()
        		->item($RoomModel)
        		->transformWith(new RoomTransformer)
        		->toArray();

        return response()->json($data,201);
    }

    public function updateRoom(Request $request, $id){
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


        $RoomModel = RoomModel::find($id);

        $RoomModel->name 			= $request->get('nama',$RoomModel->name);
        $RoomModel->address 		= $request->get('alamat',$RoomModel->address);
        $RoomModel->photo 			= 'default.jpg';
        $RoomModel->district 		= $request->get('kecamatan',$RoomModel->district);
        $RoomModel->city 			= $request->get('kabupaten',$RoomModel->city);
        $RoomModel->province 		= $request->get('provinsi',$RoomModel->province); 
        $RoomModel->information 	= $request->get('informasi',$RoomModel->information);
        $RoomModel->contact_number = $request->get('nomor',$RoomModel->contact_number);
        $RoomModel->contact_email 	= $request->get('email',$RoomModel->contact_email);
        $RoomModel->cooperate 		= $request->get('cooperate',$RoomModel->cooperate);

        $RoomModel->save();

    	$data = fractal()
        		->item($RoomModel)
        		->transformWith(new RoomTransformer)
        		->toArray();;
        return response()->json($data,201);
    }

    public function destroyRoom(RoomModel $id){
    	$id->delete();
    	return response()->json([
    			'message' => 'Data berhasil dihapus'
    		],200);
    }
}

<?php

namespace App\Http\Controllers\Api\Secure;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\AdminAuthModel;
use App\Transformers\AdminTransformer;

class AdminController extends Controller
{
    public function getAdmin(){
    	$data = AdminAuthModel::all();


    	$data = fractal()
    			->collection($data)
    			->transformWith(new AdminTransformer)
    			->toArray();
    	return response()->json($data,200);
    }

    public function getDetailAdmin($id){
    	$data = AdminAuthModel::find($id);

    	$data = fractal()
    			->item($data)
    			->transformWith(new AdminTransformer)
    			->toArray();

    	return response()->json($data,200);
    }

    public function postAdmin(Request $request,AdminAuthModel $AdminAuthModel){
    	$this->validate($request,
    		[
				'nama'		=> 'required|max:255|min:3',	 		
				'email'		=> 'required|max:100',
				'password' 	=> 'required|min:6',	
				'kontak'	=> 'required|numeric',	
				'alamat'	=> 'required|max:255',			
			]);
    	
		$AdminAuthModel->name 			=  $request->nama;
		$AdminAuthModel->email 			=  $request->email;
		$AdminAuthModel->password 		=  bcrypt($request->password);
		$AdminAuthModel->phone 			=  $request->kontak;
		$AdminAuthModel->address 		=  $request->alamat;
		$AdminAuthModel->is_deleted 	=  '0';
		$AdminAuthModel->remember_token =  bcrypt($request->email);

        $AdminAuthModel->save();

        $data = fractal()
        		->item($AdminAuthModel)
        		->transformWith(new AdminTransformer)
        		->toArray();

        return response()->json($data,201);
    }

    public function updateAdmin(Request $request, AdminAuthModel $admin){
    	$this->validate($request,
    		[
				'nama'		=> 'required|max:255|min:3',	 		
				'email'		=> 'required|max:100',
				'password' 	=> 'required|min:6',	
				'kontak'	=> 'required|numeric',	
				'alamat'	=> 'required|max:255',			
			]);
    	
		$admin->name 			=  $request->nama;
		$admin->email 			=  $request->email;
		$admin->password 		=  bcrypt($request->password);
		$admin->pw 				=  $request->password;
		$admin->phone 			=  $request->kontak;
		$admin->address 		=  $request->alamat;
		$admin->remember_token 	=  bcrypt($request->email);

        $admin->save();

        $data = fractal()
        		->item($admin)
        		->transformWith(new AdminTransformer)
        		->toArray();

        return response()->json($data,201);
    }

    public function destroyAdmin(AdminAuthModel $admin){
    	$admin->delete();
    	return response()->json([
    			'message' => 'Data berhasil dihapus'
    		],200);
    }
}

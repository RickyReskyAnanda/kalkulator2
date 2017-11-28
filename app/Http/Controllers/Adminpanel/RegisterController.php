<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function index(Request $request,$content = null){
    	if (!is_null($content)) {
            if ($request->ajax()) {

                $response = [
                     'page' => view('kepompong.register.register')->render(),
                     'timestamp' => microtime(true)
                 ];
                return response()->json($response);

            }
        }
        return view('kepompong.index');
    }
}

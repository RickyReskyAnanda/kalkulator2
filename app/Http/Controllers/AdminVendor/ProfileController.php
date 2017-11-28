<?php

namespace App\Http\Controllers\AdminVendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProfileController extends Controller
{
    public function getIndex(Request $request, $content=null){
    	if (!is_null($content)) {
            if ($request->ajax()) {

                $response = [
                     'page' => view('adminvendor.profile')->render(),
                     'timestamp' => microtime(true)
                 ];
                return response()->json($response);
            }
        }
        return view('adminvendor.index');
    }
}

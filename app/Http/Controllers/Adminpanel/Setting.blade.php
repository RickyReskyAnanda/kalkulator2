<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SettingController extends Controller
{
	public function viewSetting(Request $request, $content=null){
    	if (!is_null($content)) {
            if ($request->ajax()) {

                $response = [
                     'page' => view('kepompong.setting.setting')->render(),
                     'timestamp' => microtime(true)
                 ];
                return response()->json($response);

            }
        }
        return view('Kepompong.index');
    }	

}

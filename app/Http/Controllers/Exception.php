<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Exception extends Controller
{
    static function error404($data  = 'Data'){
        return response()->json([
            'status' => '404',
            'error' => 'Data Not Found',
            'error_description' => $data.' tidak ditemukan'
        ],404);
    }
    static function error500($exception){
        return response()->json([
            'status' => 500,
            'error' => 'internal server error',
            'error_description' => $exception->getMessage()
        ],500);
    }
    static function error422($validator){
        return response()->json([
            'status' => 422,
            'error' => 'unprocessable entity',
            'error_description' => $validator->messages(),
        ],422);
    }
}

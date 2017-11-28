<?php

namespace App\Http\Controllers\Adminpanel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManajemenUserController extends Controller
{
    public function viewManajemenUser(){
    	return view('adminpanel.manajemenuser.manajemenuser');
    }

    public function viewAddUser(){
    	return view('adminpanel.manajemenuser.adduser');
    }

    public function viewEditUser(){
    	return view('adminpanel.manajemenuser.edituser');
    }

    public function viewDeleteUser(){
    	return view('adminpanel.manajemenuser.deleteuser');
    }
}

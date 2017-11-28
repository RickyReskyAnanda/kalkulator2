<?php

namespace App\Http\Controllers\AdminVendor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\VenueModel;
use Auth;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function getIndex()
    {
        if (Auth::guard('vendor')->check()) return redirect('vendor/dashboard');
        return view('adminvendor.login');

    }
    public function vendorAuth(Request $request)
    {

        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if (Auth::guard('vendor')->attempt(['contact_email' => $request->email, 'password' => $request->password],true))
        {
            return redirect('vendor/dashboard');
        }
        else{
            return redirect()->back()->with('msg', 'Your Email or Password wrong.');
        }
    }

    public function logout(){
        
        Auth::guard('vendor')->logout();
        return redirect('vendor');
    }
}

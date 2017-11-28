<?php
namespace App\Http\Controllers\Authbackweb;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Model\AdminAuthModel;
use Auth;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    // protected $redirectTo = '/xxx/dashboard';
    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function getAdminLogin()
    {
        if (Auth::guard('admin')->check()) return redirect('adminpanel/dashboard');
        return view('admin.login');
    }
    public function adminAuth(Request $request)
    {
        $this->validate($request, [
            'username'  => 'required',
            'password'  => 'required',
        ]);
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password],true))
        {
        	// if(Auth::guard('admin')->check())
            // if(Auth::guard('admin')->login(Auth::guard('admin')->user(),true))
            // return Auth::guard('admin')->user();
            return response()->json('success',201);
            // return redirect()->route('admin.dashboard');
        }else{
            return response()->json('failed',201);
        }
    }

    public function logout(){
        if(Auth::guard('admin')->logout()){
            return redirect('kepompong/login');
        }
    }
}


// http://www.expertphp.in/article/how-to-implement-multi-auth-in-laravel-5-4-with-example
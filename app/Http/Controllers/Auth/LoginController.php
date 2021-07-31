<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
    // public function postlogin(Request $request){
    //     if (Auth::guard('admin')-> attempt(['email' => $request->email, 'password' => $request->password])) {
    //         return redirect('/backend');        
    //     }
    // }

    // public function logout(){
    //     Auth::logout();
    //     return redirect('/');
    // }

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/backend';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}

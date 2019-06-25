<?php

namespace App\Http\Controllers\AuthAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{

    public function __construct()
    {
        $this->middleware('guest:admin')->except(['logout','logout_admin']);
    }

     public function showLoginForm()
    {
        return view('authAdmin.login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|string',
        ]);
         $credential= [
            'email' => $request->email,
            'password' => $request->password,
        ];

       if (Auth::guard('admin')->attempt($credential,$request->member)) {
           return redirect()->intended('/admin') ;//suuces
       }
       return redirect()->back()->withInput($request->only('email','remember'))->withErrors(["email"=>"email tidak ada"]);//failed
    }

        public function logout_admin()
    {
        Auth::guard('admin')->logout();

        return redirect('/');
    }
}

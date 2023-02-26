<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cookie;

use Illuminate\Support\Facades\Auth;
use function view;

class LoginController extends Controller
{
    public function login()
    {
        if(Auth::user() && Auth::user()->is_admin == 'Yes') {
            return redirect('adminpanel');
        }else{
            return view('ap.login');
        }
    }

    public function do_login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        $remember = ($request->get('remember') == 'on') ? true : false;


        if (Auth::attempt($credentials, $remember)) {

            Cookie::queue('email', $credentials['email'], 1440);
            Cookie::queue('password', $credentials['password'], 1440);

        } else {
            return redirect()->back()->withErrors( 'Wrong password or account doesn\'t exist');
        }

        $user = Auth::user();
        if ($user->is_admin == 'No') {
            Auth::logout();
            return redirect()->back()->withErrors('You don\'t have permission to authenticate as admin');
        }

        return redirect('adminpanel');
    }

    public function logout(){

        Auth::logout();
        return redirect('adminlogin')->withSuccess('You have logout successful');
    }
}

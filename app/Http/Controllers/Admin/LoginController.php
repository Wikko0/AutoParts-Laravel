<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Cookie;
use function view;

class LoginController extends Controller
{
    public function login()
    {
        if(session('Admin')) {
            return redirect('adminpanel');
        }else{
            return view('ap.login');
        }
    }

    public function do_login(Request $request)
    {
        $admin = Admin::where('email', '=', $request->email)
            ->where('password', '=', $request->password)
            ->first();

        if ($admin) {
            $request->session()->put('Admin', $admin->name);

            if ($request->has('remember_me')){
                Cookie::queue('email', $request->email,1440);
                Cookie::queue('password', $request->password,1440);
            }

            return redirect('adminpanel');

        } else {
            return redirect()->back()->withErrors( 'Wrong password or account doesn\'t exist');
        }
    }
}

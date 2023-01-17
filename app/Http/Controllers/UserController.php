<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class UserController extends Controller
{
    private $user;

    public function __construct()
    {

        $this->middleware('auth');
        $this->middleware(function ($request, $next) {
            $this->user = Auth::user();
            return $next($request);
        });
    }

    public function account()
    {
        return view('user.myaccount', ['user' => $this->user]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}

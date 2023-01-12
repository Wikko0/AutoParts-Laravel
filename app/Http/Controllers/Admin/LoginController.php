<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use function view;

class LoginController extends Controller
{
    public function login()
    {
        return view('ap.login');
    }

    public function do_login()
    {
        return view('ap.login');
    }
}

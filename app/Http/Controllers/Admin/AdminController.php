<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use function view;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function dashboard()
    {
        return view('ap.dashboard');
    }
}

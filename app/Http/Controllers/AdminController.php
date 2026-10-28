<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function sweetAlert()
    {
        return view('admin.sweet-alert');
    }

    public function uiElements()
    {
        return view('admin.ui-elements');
    }

    public function forms()
    {
        return view('admin.forms');
    }

    public function tables()
    {
        return view('admin.tables');
    }

    public function profile()
    {
        return view('admin.profile');
    }
}

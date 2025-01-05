<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index()
    {
        return view('frmLogin');
    }

    public function login()
    {
        return view('frmLogin');
    }
}

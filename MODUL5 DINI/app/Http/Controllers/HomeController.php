<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request)
    {
        if (!$con->session()->has('navbar')) {
            $request->session()->put('navbar', 'primary');
        }
        return view('home');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('home');
    }
    public function form()
    {
        return view('form');
    }
    public function store(Request $request)
    {
        // return $request->all();

        $request->validate([
            'name'=>'required',
            'username'=>'required|regex:/^\S*$/u|regex:/^[\pL\s\-]+$/u',  // for white space + special character
        ]);
        return $request->all();

    }
}

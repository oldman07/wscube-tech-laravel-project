<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeginnerSimpleController extends Controller
{
    public function index()
    {
        return view('forms/beginner');
    }
    public function show_us(Request $request)
    {
        echo 'go';
        print_r($request->all());
    }
}

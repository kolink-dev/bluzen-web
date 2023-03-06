<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmarStreetController extends Controller
{
    public function index(){
        return view('smart-street.index');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceSolutionController extends Controller
{
    public function index(){
        return view('service-solution.index');
    }
}

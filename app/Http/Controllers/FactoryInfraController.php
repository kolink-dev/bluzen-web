<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FactoryInfraController extends Controller
{
    public function index(){
        return view('factory-infra.index');
    }
}

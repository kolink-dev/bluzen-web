<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WorkplaceController extends Controller
{
    public function index(){
        return view('workplace.index');
    }
}

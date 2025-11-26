<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobController extends Controller
{
    function index(){
        return view('job/index');
    }
}

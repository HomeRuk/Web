<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AboutController extends Controller
{
    function index1(){
        return view('about1');
    }
}

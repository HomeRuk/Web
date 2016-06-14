<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ArticlesController extends Controller
{
    public function index(){
        return "This is article page from controller";
    }
}

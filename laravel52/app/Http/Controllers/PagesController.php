<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function getIndex(){
        return "This is PagesController@index";
    }
    public function getShowId(){
        return "This is PagesController@show";
    }
    public function getAbout(){
        return view('pages.about');
    }
    public function getContact(){
        return view('pages.contact');
    }
    public function getWelcomeBlade(){
        $title = '"Webcome PHP framework : Laravel"';
        return view('pages.welcomeblade', ['vartitle' => $title]);
    }
}

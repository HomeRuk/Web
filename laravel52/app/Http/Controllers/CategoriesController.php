<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class CategoriesController extends Controller
{
    function main(){
        return 'This is a Categories';
    }

    public function show($id){
        return 'This is Categories page & Method show1 for ID'  . $id;
    }

    public function show2($id=null){
        return 'This is Categories page & Method show2 for ID'  . $id;
    }

    public function page($id, $title=null){
        return 'This is Categories page & Method page to page ' . $id . ' ' . $title;
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\TypeFood;

class TypeFoodController extends Controller {

    public function index() {

        $typefood = TypeFood::all();
        return view('typefood.index', [
            'typefoods' => $typefood,
        ]);
    }

    public function show($typefood_id = null) {
        $typefood = TypeFood::where('typefood_id', '=', $typefood_id)->get();
        if((isset($typefood)) && (count($typefood) > 0)){
            return view('typefood.show', [
                'typefoods' => $typefood,    
            ]);        
        }else{
            return view('errors1/404');
        }       
    }
    
    public function edit($typefood_id = null) {
        
    }
}

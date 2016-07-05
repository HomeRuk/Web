<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\FoodRequest;
use App\Food;
use Image;
use File;

class FoodController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {

        $food = Food::paginate(4);

        $count = Food::count();

        return view('food.index', [
            'foods' => $food,
            'count' => $count
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('food.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FoodRequest $request) {

        $food = new Food();
        $food->name = $request->name;
        $food->price = $request->price;
        $food->typefood_id = $request->typefood_id;
        
        //upload file img
        if ($request->hasFile('image')) {
            $newfilename = time() . '_' . str_random(10) . '.'
                    . $request->file('image')->getClientOriginalExtension();

            $request->file('image')->move(public_path() . '/images/', $newfilename);

            //resize image
            Image::make(public_path() . '/images/' . $newfilename)->resize(50, 50)->save(public_path() . '/images_resize/' . $newfilename);

            $food->image = $newfilename;
        }
        $food->save();
        //Food::create($request->all());
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $food = Food::find($id);
        return view('food.edit', [
            'food' => $food,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(FoodRequest $request, $id) {
        $food = Food::find($id);
        $food->name = $request->name;
        $food->price = $request->price;
        $food->typefood_id = $request->typefood_id;
        //upload file img
        
        if ($request->hasFile('image')) {
            //delete file 
            if($food->image != 'nopic.jpg'){
                File::delete(public_path().'\\images\\.$food->image');
                File::delete(public_path().'\\images_resize\\.$food->image');     
            }
            $newfilename = time() . '_' . str_random(10) . '.'
                    . $request->file('image')->getClientOriginalExtension();

            $request->file('image')->move(public_path() . '/images/', $newfilename);

            //resize image
            Image::make(public_path() . '/images/' . $newfilename)->resize(50, 50)->save(public_path() . '/images_resize/' . $newfilename);

            $food->image = $newfilename;
        } else {
            $food->image = $food ->image; //ชื่อเดิม
        }
        $food->save();
        //Food::update($request->all());
        return redirect()->action('FoodController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        $food = Food::find($id);
        if ($food->image != 'nopic.jpg') {
            File::delete(public_path() . '\\images\\.$food->image');
            File::delete(public_path() . '\\images_resize\\.$food->image');
        }

        $food->delete();

        return redirect()->action('FoodController@index');
    }

}

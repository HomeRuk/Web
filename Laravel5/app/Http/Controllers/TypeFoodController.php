<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\StoreTypeFoodRequest;

//use App\Http\Requests;

use App\TypeFood;

class TypeFoodController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        
        //$typefood = TypeFood::all()
        //$typefood = TypeFood::all()->random(2);
        //$typefood = TypeFood::orderBy('id','desc')->get();
        /* sample Secrch
         *  $search = '%ก%';
         *  $typefood = TypeFood::where('name', 'LIKE', $search )->get();
         */
        $typefood = TypeFood::paginate(4);
        
        $count = TypeFood::count();

        return view('typefood.index', [
            'typefoods' => $typefood,
            'count' => $count
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('typefood.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTypeFoodRequest $request) {
        
        $typefood = new TypeFood();
        /*$typefood->name = $request->name;
        $typefood->save();*/
        $typefood->create($request->all()); //define $fillable in model typefood
        return redirect()->action('TypeFoodController@index');
        
    }
     public function insert() {
        
        $tf1 = new TypeFood();
        /*
         * $tf1->name = 'ปิ้ง';
         * $tf1->save();
         */
        $data = [
            'name' => 'ปิ้งย่าง'
        ];
        $tf1->create($data);
        
        return 'บันทึกเรียบร้อย';
    }
    
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        $typefood = TypeFood::find($id);
        return view('typefood.show', [
            'typefood' => $typefood
        ]); // typefood/show.blade.php
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        
        $typefood = TypeFood::find($id);
        return view('typefood.edit',[
                'typefood' => $typefood           
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreTypeFoodRequest $request, $id) {
         
        $typefood = TypeFood::find($id);
        $typefood->name = $request->name;
        $typefood->save();
        
        //$typefood->update($request->all()); //define $fillable in model typefood
        return redirect()->action('TypeFoodController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }
    
    //ใช้เพื่อการเรียน delete
    public function delete($id) {
        /*
        $typefood = TypeFood::find($id);
        $typefood->delete();
         */
        TypeFood::destroy($id);
        return back();
    }
}

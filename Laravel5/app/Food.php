<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected  $table = 'food';
    protected $fillable = ['name','price','typefood_id'];
    
    public function typefood(){
    
        //return $this->belongsTo(TypeFood::class, 'id');
        return $this->belongsTo(TypeFood::class);
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TypeFood extends Model
{
    protected $table = 'typefood';
    protected $fillable = ['name'];
    
    public function food(){
    
        return $this->hasMany(Food::class, 'typefood_id');
        
    }
}

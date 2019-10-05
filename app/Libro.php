<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    //
    protected $fillable=['id','titulo','isbn','autor','categoria_id','carrera_id'];
    public function carrera(){
    	return $this->belongsTo(Carrera::class,'id');
    }
    public function categoria(){
    	return $this->belongsTo(Categoria::class,'id');
    }
    
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    //
    protected $table = 'modelos';
    protected $fillable = [

    'id',
    'name',
    'capacidad'

    ];

    public function difusores(){
    	return $this->hasMany("App\Difusor");
    }
    public function consumos(){
    	return $this->hasMany("App\Consumo");
    }
    
}

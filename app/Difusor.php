<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Difusor extends Model
{
    //
    protected $table = 'difusores';
    protected $fillable = [

    'modelo_id',
    'punto_id',
    'cdgo_placa'

    ];

    public function punto(){
    	return $this->belongsTo('App\Punto');
    }
    
    public function modelo(){
    	return $this->belongsTo("App\Modelo");
    }

    public function configuracion(){
    	return $this->hasMany("App\Configuracion");
    }
}

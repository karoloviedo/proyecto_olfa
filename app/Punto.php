<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Punto extends Model
{
    //
    protected $table = 'puntos';
    protected $fillable = [

    'name',
    'nit',
    'covende',
    'coatiende',
    'contrato',
    'linea',
    'sublinea',
    'estado_contrato'

    ];

    public function cliente(){
		return $this->belongsTo('App\Cliente','nit','nit');
	}

	public function regionalVende(){
		return $this->belongsTo('App\Regional','covende');
	}
	public function regionalAtiende(){
		return $this->belongsTo('App\Regional','coatiende');
	}

	public function difusores(){
    	return $this->hasMany('App\Difusor');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recarga extends Model
{
    //
    protected $table = 'recargas';
    protected $fillable = [

    'difusor_id',
    'capacidad',
    'fcha_recarga',
    'dias',
    'fcha_cmbio_prog'
    'fcha_est_prod',
    'fcha_est_cmbio'

    ];

    public function difusor(){
    	return $this->belongsTo('App\Difusor');
    }
}

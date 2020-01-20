<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consumo extends Model
{
    //
    protected $table = 'consumos';
    protected $fillable = [

    'modelo_id',
    'g1',
    'g2',
    'g3',
    'g4',
    'g5',
    'g6',
    'g7',
    'g8',
    'g9',
    'g10'

    ];

    public function modelo(){
    	return $this->belongsTo("App\Modelo");
    }
}

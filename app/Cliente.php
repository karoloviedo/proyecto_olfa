<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    //
    protected $table = 'clientes';
    protected $fillable = [

    'id',
    'razon_social',
    'observaciones'

    ];

    // function puntos(){
    // return $this->hasMany('App\Punto', 'nit' , 'nit');
    
}

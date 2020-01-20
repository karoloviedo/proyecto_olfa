<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuracion extends Model
{
    //
    protected $table = 'configuraciones';
    protected $fillable = [

    'id',
    'difusor_id',
    'nivel',


    ];

    //protected $fillable = ['id','dia', 'nivel'];
    // public function difusor()
    // {
    //     return $this->belongsTo("App\Difusor");
    // }
    // public function configuracion_dias(){
    //     return $this->hasMany("App\ConfiguracionDia");
    // }
}

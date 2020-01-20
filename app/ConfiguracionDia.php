<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ConfiguracionDia extends Model
{
    //
    protected $table = 'configuracion_dias';
    protected $fillable = [
    
    'configuracion_id',
    'dia',
    'hora_ini',
    'hora_fin',
    'pos'

    ];

    public function configuracion(){
        return $this->belongsTo("App\Configuracion");
    }

}

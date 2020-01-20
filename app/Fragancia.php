<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fragancia extends Model
{
    //
    protected $table = 'fragancias';
    protected $fillable = [

    'fragancia_id',
    'name',
    'tipo_fragancia',
    'gravedad_especifica',
    'proporcion'

    ];

    public function tipo_fragancia(){
        return $this->belongsTo('App\TipoFragancia','tipo_fragancia_id');
       }
}

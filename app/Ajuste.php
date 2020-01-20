<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ajuste extends Model
{
    //
    protected $table = 'ajustes';
    protected $fillable = [

    'punto_id',
    'difusor_id',
    'fragancia_id',
    'ajuste_dias',
    'ajuste_proporcion'

}

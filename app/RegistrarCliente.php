<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RegistrarCliente extends Model
{
    //
    protected $table = "clientes";
    protected $fillable = [
        
    'nit',
    'razon_social'
    
    ];
}

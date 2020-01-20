<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Regional extends Model
{
    //
    protected $table = 'regionales';
    protected $fillable = [

    'name'

    ];

    public function regionalVende(){
		return $this->hasMany('App\Punto','covende');
	}
	public function regionalAtiende(){
		return $this->hasMany('App\Punto','coatiende');
	}
}

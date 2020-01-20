<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    //
    protected $table = 'profiles';
    protected $fillable = [

    'name_company',
    'contact_person',
    'phone',
    'address',
    'website'

    ];
}

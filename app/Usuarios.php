<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Usuarios extends Model
{


    protected $table = 'usuarios';


    protected $fillable = [
      'id','nombre', 'apellido','email', 'password',
    ];

   
    protected $hidden = [
      'password',
    ];
}
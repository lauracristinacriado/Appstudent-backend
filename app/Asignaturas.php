<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Asignaturas extends Model
{


    protected $table = 'asignaturas';


    protected $fillable = [
      'id','nombre', 'profesor','salon','descripcion',
    ];

   
    protected $hidden = [
    
    ];
}

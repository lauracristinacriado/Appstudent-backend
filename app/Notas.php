<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Notas extends Model
{


    protected $table = 'notas';


    protected $fillable = [
      'id','orden', 'porcentaje','valor','asignatura',
    ];

   
    protected $hidden = [
    
    ];
}
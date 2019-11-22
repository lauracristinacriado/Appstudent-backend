<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Agenda extends Model
{


    protected $table = 'agenda';


    protected $fillable = [
      'id','asignatura', 'titulo','descripcion','fecha_entrega',
    ];

   
    protected $hidden = [
    
    ];
}
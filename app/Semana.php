<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Lumen\Auth\Authorizable;

class Semana extends Model
{


    protected $table = 'semana';


    protected $fillable = [
      'id','dia', 'horarios',
    ];

   
    protected $hidden = [
    
    ];
}
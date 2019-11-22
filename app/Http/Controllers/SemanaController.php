<?php

namespace App\Http\Controllers;

use App\Semana;
use Illuminate\Http\Request;


class SemanaController extends Controller
{

    function get_semana(){
        $semana = Semana::get();
        return response()->json($semana);
    }

    function crear_semana(Request $request){
        $this->validate($request, [
            'dia'   => 'required',
            'horarios' => 'required',
            
        ]);


        if(Semana::create([
            'dia' => $request['dia'],
            'horarios' => $request['horarios'],
            
        ])){
            return response()->json([
                'success' => [
                   'title'=> 'success',
                    'code' => 200,
                    'message' => "La dia ".$request['dia']." fué creado con exíto",
                ]
              ], 200);

        }else{
            return response()->json([
                'error' => [
                   'title'=> 'error',
                    'code' => 500,
                    'message' => "La semana no se creo correctamente",
                ]
              ], 500);
        }



    }








    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    //
}
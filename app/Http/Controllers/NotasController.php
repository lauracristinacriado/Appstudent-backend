<?php

namespace App\Http\Controllers;

use App\Notas;
use Illuminate\Http\Request;


class NotasController extends Controller
{

    function get_notas(){
        $notas = Notas::get();
        return response()->json($notas);
    }

    function crear_nota(Request $request){
        $this->validate($request, [
            'orden'   => 'required',
            'porcentaje' => 'required',
            'valor'    => 'required',
            'asignatura' => 'required',
        ]);


        if(Notas::create([
            'orden' => $request['orden'],
            'porcentaje' => $request['porcentaje'],
            'valor' => $request['valor'],
            'asignatura' => $request['asignatura']
        ])){
            return response()->json([
                'success' => [
                   'title'=> 'success',
                    'code' => 200,
                    'message' => "La nota ".$request['valor']." fué guardada con exíto",
                ]
              ], 200);

        }else{
            return response()->json([
                'error' => [
                   'title'=> 'error',
                    'code' => 500,
                    'message' => "La nota no se creo correctamente",
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

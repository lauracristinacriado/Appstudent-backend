<?php

namespace App\Http\Controllers;

use App\Asignaturas;
use Illuminate\Http\Request;


class AsignaturasController extends Controller
{

    function get_asignaturas(){
        $asignaturas = Asignaturas::get();
        return response()->json($asignaturas);
    }

    function crear_asignatura(Request $request){
        $this->validate($request, [
            'nombre'   => 'required|max:25',
            'profesor' => 'required',
            'salon'    => 'required',
            'descripcion' => 'required',
        ]);


        if(Asignaturas::create([
            'nombre' => $request['nombre'],
            'profesor' => $request['profesor'],
            'salon' => $request['salon'],
            'descripcion' => $request['descripcion']
        ])){
            return response()->json([
                'success' => [
                   'title'=> 'success',
                    'code' => 200,
                    'message' => "La asignatura ".$request['nombre']." fué creada con exíto",
                ]
              ], 200);

        }else{
            return response()->json([
                'error' => [
                   'title'=> 'error',
                    'code' => 500,
                    'message' => "La asignatura no se creo correctamente",
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

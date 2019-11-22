<?php

namespace App\Http\Controllers;

use App\Agenda;
use Illuminate\Http\Request;

class AgendaController extends Controller
{

    function get_agenda(){
        $agenda = Agenda::get();
        return response()->json($agenda);
    }

    function crear_agenda(Request $request){
        $this->validate($request, [
            'asignatura'   => 'required',
            'titulo' => 'required',
            'descripcion'    => 'required',
            'fecha_entrega' => 'required',
        ]);


        if(Agenda::create([
            'asignatura' => $request['asignatura'],
            'titulo' => $request['titulo'],
            'descripcion' => $request['descripcion'],
            'fecha_entrega' => $request['fecha_entrega']
        ])){
            return response()->json([
                'success' => [
                   'title'=> 'success',
                    'code' => 200,
                    'message' => "El trabajo ".$request['titulo']." fué creado con exíto",
                ]
              ], 200);

        }else{
            return response()->json([
                'error' => [
                   'title'=> 'error',
                    'code' => 500,
                    'message' => "El trabajo  no se creo correctamente",
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

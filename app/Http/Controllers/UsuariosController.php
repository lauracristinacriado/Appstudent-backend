<?php

namespace App\Http\Controllers;

use App\Usuarios;
use Illuminate\Http\Request;



class UsuariosController extends Controller
{

    function get_usuarios(){
        $usuarios = Usuarios::get();
        return response()->json($usuarios);
    }

    function crear_usuario(Request $request){
        $this->validate($request, [
            'nombre'   => 'required|max:25',
            'apellido' => 'required',
            'email'    => 'required',
            'password' => 'required'
        ]);


        if(Usuarios::create([
            'nombre' => $request['nombre'],
            'apellido' => $request['apellido'],
            'email' => $request['email'],
            'password' =>$request['password']
            
        ])){
            return response()->json([
                'success' => [
                   'title'=> 'success',
                    'code' => 200,
                    'message' => "el usuario ".$request['nombre']." fué creada con exíto",
                ]
              ], 200);

        }else{
            return response()->json([
                'error' => [
                   'title'=> 'error',
                    'code' => 500,
                    'message' => "el usuario no se creo correctamente",
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

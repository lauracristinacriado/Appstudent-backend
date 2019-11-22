<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('asignaturas', ['uses' => 'AsignaturasController@get_asignaturas']);

$router->get('semana', ['uses' => 'SemanaController@get_semana']);

$router->get('agenda', ['uses' => 'AgendaController@get_agenda']);

$router->get('notas', ['uses' => 'NotasController@get_notas']);

$router->get('usuarios', ['uses' => 'UsuariosController@get_usuarios']);

$router->post('asignaturas', ['uses' => 'AsignaturasController@crear_asignatura']);

$router->post('semana', ['uses' => 'SemanaController@crear_semana']);

$router->post('agenda', ['uses' => 'AgendaController@crear_agenda']);

$router->post('notas', ['uses' => 'NotasController@crear_nota']);

$router->post('usuarios', ['uses' => 'UsuariosController@crear_usuario']);



<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Route::get('/', function() {
    return View::make('login');
});

Route::post('/', 'UsuarioController@verificarUsuario');


Route::get('logado/index', function() {
    return View::make('paginas.index');
});

Route::get('logado/admin/index', function() {
    return "Logado como admin";
});

/*
Route::get('equipamentos', 'PaginasController@equipamentos');

Route::get('equipamentos', 'PaginasController@equipamentos');

Route::get('equipamentos', 'PaginasController@equipamentos');

Route::get('equipamentos', 'PaginasController@equipamentos');

Route::get('equipamentos', 'PaginasController@equipamentos');

Route::get('equipamentos', 'PaginasController@equipamentos');

*/
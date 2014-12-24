<?php

Route::get('/', function() {
    return View::make('login');
});

Route::get('/', 'EmpresaController@getEmpresasLogin');

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
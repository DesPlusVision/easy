<?php

Route::get('/', function() {
    return View::make('login');
});

Route::get('/', 'EmpresaController@getEmpresasLogin');

Route::post('/', 'UsuarioController@verificarUsuario');

Route::get('logado', function() { return View::make('logado.index'); });

Route::get('admin', 'PaginasController@indexAdmin');

Route::get('/admin/empresas', 'PaginasController@Empresas');

Route::get('/admin/empresas/inativar', 'EmpresaController@inativar');
Route::get('/admin/empresas/ativar', 'EmpresaController@ativar');
Route::post('/admin/empresas', 'EmpresaController@create');

Route::get('/admin/empresas/consultar/{id}', 'EmpresaController@consultar');
Route::get('/admin/empresas/alterar/{id}', 'PaginasController@AlterarEmpresas');
Route::post('/admin/empresas/aletrar/{id}', 'EmpresaController@update');
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

Route::get('/admin/empresas/consultar{id}', 'EmpresaController@consultar');
/*
Route::get('/admin/empresas/consulta{id}', function()
{
    $html = '<html><body>'
            . '<p>Put your html here, or generate it with your favourite '
            . 'templating system.</p>'
            . '</body></html>';
    return PDF::load($html, 'A4', 'portrait')->show();
});*/

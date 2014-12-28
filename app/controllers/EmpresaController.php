<?php

class EmpresaController extends BaseController {

    public function getEmpresasLogin() {
        $slcEmpresa = DB::table('empresas')->lists('nm_empresa', 'id');
        return View::make('login')->with('slcEmpresa', $slcEmpresa);
    }
    
    public static function getEmpresas(){
        return Empresa::getEmpresas();
    }
    
    public static function inativar(){
        $id = @$_GET['id'];
        Empresa::inativar($id);
        return Redirect::to('admin/empresas');
    }
    
    public static function ativar(){
        $id = @$_GET['id'];
        Empresa::ativar($id);
        return Redirect::to('admin/empresas');
    }
    
    public function create(){
        
        $empresa                = new Empresa;
        $empresa->nm_empresa    = Input::get('nm_empresa');
        $empresa->cnpj          = Input::get('cnpj');
        $empresa->endereco      = Input::get('endereco');
        $empresa->bairro        = Input::get('bairro');
        $empresa->cidade        = Input::get('cidade');
        $empresa->idEstado      = Input::get('idEstado');
        $empresa->contato       = Input::get('contato');
        $empresa->fone          = Input::get('fone');
        $empresa->dataPagamento = Input::get('dataPagamento');
        $empresa->fone          = Input::get('fone');
        $empresa->idStatus      = '1';
        $empresa->dataCadastro  = date('Y-m-d');
        $empresa->save();
        
        return Redirect::action('PaginasController@Empresas');       
    }
    
    public function consultar($id){
        
        $empresa = Empresa::find($id);
        $vars = array('empresa' => $empresa);
        return View::make('admin.consulta.empresa', $vars);
    }
}

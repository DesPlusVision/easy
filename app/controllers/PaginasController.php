<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PaginasController extends BaseController{
    protected $layout = "layouts.main";

    public function indexAdmin(){
        $this->layout->titulo = "Easy Manager | Administrador";
        $this->layout->pagina = "admin.index";
    }
    
    public function Empresas(){
        $this->layout->titulo = "Easy | Empresas";
        $this->layout->pagina = "admin.cadastro.empresas";
        $this->layout->estado = EstadoController::getEstados();
        $this->layout->empresas = EmpresaController::getEmpresas();
    }
    
    public function AlterarEmpresas($id){
        $this->layout->titulo = "Easy | Empresas";
        $this->layout->pagina = "admin.alterar.empresa";        
        $empresa = Empresa::find($id);
        //$this->layout->estado = EstadoController::getEstados();
        $this->layout->empresa = $empresa; 
        $this->layout->estado = Estado::find($empresa->idEstado)->lists('estado','id');
        
    }
}
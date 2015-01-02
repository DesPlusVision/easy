<?php

/************************************************************************************************/
/*  Classe Responsavel pela exibição das Paginas com base no Layout Desenvolvido
 *  Sabendo que para poder utilizar o layout é de obrigação passar as seguintes variaveis
 *  Titulo, Pagina
 *  Titulo: Nada mais que titulo da pagina a ser exibida
 *  Pagina: A View que foi produzido o HTML a ser exibido no Conteudo.
 *  Essa classe é chamada apatir de uma roda que idetenfica sua URL passando nomeClasse@Metodo     
************************************************************************************************/

class PaginasController extends BaseController{
    protected $layout = "layouts.main";

    public function indexAdmin(){
        $this->layout->titulo = "Easy Manager | Administrador";
        $this->layout->pagina = "admin.index";
    }
    
    /************************************************************************************************/
    /*  Metodos Responsavel Para as Telas Cadastro/Alteração de Empresas     
     ************************************************************************************************/
    
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
        $this->layout->empresa = $empresa; 
        $this->layout->estado = Estado::find($empresa->idEstado)->lists('estado','id');
        
    }
    
    /************************************************************************************************/
    /*  Metodos Responsavel Para as Telas Cadastro/Alteração de Usuarios     
     ************************************************************************************************/
    public function Usuarios(){
        $this->layout->titulo = "Easy | Usuarios";
        $this->layout->pagina = "admin.cadastro.usuarios";
        $this->layout->estado = Estado::getEstados();
        $this->layout->usuarios = Usuario::relationshipEmpresas();
        $this->layout->idEmpresa = Empresa::where('idStatus', '=', '1')->lists('nm_empresa', 'id');
        $this->layout->idAcesso = Acesso::lists('nivel', 'id');
    }
    
    public function AlterarUsuarios($id){
        $this->layout->titulo = "Easy | Usuarios";
        $this->layout->pagina = "admin.alterar.usuario";        
        $empresa = Empresa::find($id);
        $this->layout->empresa = $empresa; 
        $this->layout->estado = Estado::find($empresa->idEstado)->lists('estado','id');
        
    }
}
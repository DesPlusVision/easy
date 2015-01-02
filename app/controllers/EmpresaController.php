<?php

class EmpresaController extends BaseController {
    
    /************************************************************************************************/
    /*  Metodo que listar todas empresas para a view login
    /*  Só é apenas listada as empresas onde tem o Status como ATIVO.     
     ************************************************************************************************/

    public function getEmpresasLogin() {
        $consulta = Empresa::where('idStatus', '=', '1')->lists('nm_empresa', 'id');
        $var = array('slcEmpresa' => $consulta);
        return View::make('login', $var);
    }

    /************************************************************************************************/
    /*  Metodo responsavel por Listar em um Array todas as empresas    
     ************************************************************************************************/

    public static function getEmpresas() {
        return Empresa::getEmpresas();
    }

    /************************************************************************************************/
    /*  Metodo que inativa o status da empresa
    /************************************************************************************************/

    public static function inativar() {
        $id = @$_GET['id'];
        Empresa::inativar($id);
        return Redirect::to('admin/empresas');
    }

    /************************************************************************************************/
    /*  Metodo que ativa o status da empresa     
     ************************************************************************************************/

    public static function ativar() {
        $id = @$_GET['id'];
        Empresa::ativar($id);
        return Redirect::to('admin/empresas');
    }

    /************************************************************************************************/
    /*  Atraves da Acão do botão de Salvar na view cadastro.empresa
    /*  É instanciada a Classe Empresa do Model
    /*  Passando todos os valores informado ao objeto que é inserido no banco    
     ************************************************************************************************/

    public function create() {

        $empresa = new Empresa;
        $empresa->nm_empresa = Input::get('nm_empresa');
        $empresa->cnpj = Input::get('cnpj');
        $empresa->endereco = Input::get('endereco');
        $empresa->bairro = Input::get('bairro');
        $empresa->cidade = Input::get('cidade');
        $empresa->idEstado = Input::get('idEstado');
        $empresa->contato = Input::get('contato');
        $empresa->fone = Input::get('fone');
        $empresa->dataPagamento = Input::get('dataPagamento');
        $empresa->fone = Input::get('fone');
        $empresa->idStatus = '1';
        $empresa->dataCadastro = date('Y-m-d');
        $empresa->save();

        return Redirect::action('PaginasController@Empresas');
    }

    /************************************************************************************************/
    /*  Envia atraz de um array os dados da empresa
    /*  que deseja ser consultada para a view consulta.empresa
    /*  Essa view é armazena na variavel $html que é retornada em um PDF.      
     ***********************************************************************************************/

    public function consultar($id) {
        $empresa = Empresa::find($id);
        $estado = Estado::find($empresa->idEstado);
        $vars = array('empresa' => $empresa, 'estado' => $estado);
        $html = View::make('admin.consulta.empresa', $vars);
        return PDF::loadHTML($html, 'A4', 'portrait')->stream("Cadastro_" . $empresa->nm_empresa);
    }

    /************************************************************************************************/
    /*  Envia atraz de um array os dados da empresa
    /*  que deseja ser alterar para a view alterar.empresa      
     ************************************************************************************************/

    public function alterar($id) {
        $empresa = Empresa::find($id);
        $estado = Estado::find($empresa->idEstado);
        $vars = array('empresa' => $empresa, 'estado' => $estado);

        return View::make('admin.alterar.empresa', $vars);
    }

    /************************************************************************************************/
    /*  Apos acão do botao salvar
    /*  Atualização dos dados apartir da view alterar.empresa      
     ************************************************************************************************/

    public function update() {
        $empresa = Empresa::find(Input::get('id'));
        $empresa->nm_empresa = Input::get('nm_empresa');
        $empresa->cnpj = Input::get('cnpj');
        $empresa->endereco = Input::get('endereco');
        $empresa->bairro = Input::get('bairro');
        $empresa->cidade = Input::get('cidade');
        $empresa->idEstado = Input::get('idEstado');
        $empresa->contato = Input::get('contato');
        $empresa->fone = Input::get('fone');
        $empresa->dataPagamento = Input::get('dataPagamento');
        $empresa->fone = Input::get('fone');
        $empresa->save();

        return Redirect::action('PaginasController@Empresas');
    }

}

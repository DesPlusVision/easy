<?php

class UsuarioController extends BaseController {

    public function verificarUsuario() {
        
        $login = Input::get('txtLogin');
        $senha = Input::get('txtSenha');
        $empresa = Input::get('slcEmpresa');
        $admin = Input::get('checkAdmin');

        $usuarios = new Usuario();
        
        //Não é admin
        if ($admin == '') {
            foreach ($usuarios->getUsuarios() as $usuario) {
                if ($usuario->login == $login && $usuario->senha == md5($senha) && $usuario->idEmpresa == $empresa && $usuario->idAcesso == 2) {
                    if ($usuario->idStatus == "1") {
                        return Redirect::to('logado');
                    } else {
                        return View::make('login')->with('msg', 'Seu perfil não está ativo!');
                    }
                }
            }
            
            //Autenticação Usuario Administrador
        } else {
            foreach ($usuarios->getUsuarios() as $usuario) {
                if ($usuario->login == $login && $usuario->senha == md5($senha) && $usuario->idAcesso == 1) {
                    if ($usuario->idStatus == "1") {
                        return Redirect::to('admin')->with('usuarioLogado', $usuario->login);
                    } else {
                        return View::make('login')->with('msg', 'Seu perfil não está ativo!');
                    }
                }
            }
        }       
        return Redirect::to('/')->with('msg', 'Erro ao efetuar login');
    }    
    
    /************************************************************************************************/
    /*  Apos acão do botao salvar
    /*  Atualização dos dados apartir da view alterar.empresa      
     ************************************************************************************************/
    public function update() {}
    
    /************************************************************************************************/
    /*  Envia atraz de um array os dados do usuario
    /*  que deseja ser alterar para a view alterar.usuario      
     ************************************************************************************************/
    public function alterar($id) {}
    
    /************************************************************************************************/
    /*  Envia atraz de um array os dados do usaurio
    /*  que deseja ser consultada para a view consulta.usuario
    /*  Essa view é armazena na variavel $html que é retornada em um PDF.      
     ***********************************************************************************************/
    public function consultar($id) {}
    
    /************************************************************************************************/
    /*  Atraves da Acão do botão de Salvar na view cadastro.usuario
    /*  É instanciada a Classe Usuario do Model
    /*  Passando todos os valores informado ao objeto que é inserido no banco    
     ************************************************************************************************/
    public function create() {}
    
    /************************************************************************************************/
    /*  Metodo que ativa o status do usuario     
     ************************************************************************************************/
    public static function ativar() {}
    
    /************************************************************************************************/
    /*  Metodo que inativa o status do usuario
    /************************************************************************************************/
    public static function inativar() {}
    
    
}

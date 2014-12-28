<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

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
}

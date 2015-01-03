<?php

class UsuarioController extends BaseController {
    
    /************************************************************************************************/
    /*  Apos acão do botao salvar
    /*  Atualização dos dados apartir da view alterar      
     ************************************************************************************************/
    public function update() {}
    
    /************************************************************************************************/
    /*  Envia atraz de um array os dados
    /*  que deseja ser alterar para a view alterar   
     ************************************************************************************************/
    public function alterar($id) {}
    
    /************************************************************************************************/
    /*  Envia atraz de um array os dados do usaurio
    /*  que deseja ser consultada para a view consulta
    /*  Essa view é armazena na variavel $html que é retornada em um PDF.      
     ***********************************************************************************************/
    public function consultar($id) {}
    
    /************************************************************************************************/
    /*  Atraves da Acão do botão de Salvar na view cadastro
    /*  É instanciada a Classe do Model
    /*  Passando todos os valores informado ao objeto que é inserido no banco    
     ************************************************************************************************/
    public function create() {}
    
    /************************************************************************************************/
    /*  Metodo que ativa o status  
     ************************************************************************************************/
    public static function ativar() {}
    
    /************************************************************************************************/
    /*  Metodo que inativa o status
    /************************************************************************************************/
    public static function inativar() {}
    
    
}

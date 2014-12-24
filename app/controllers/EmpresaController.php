<?php

class EmpresaController extends BaseController {
    /* METODO QUE RETORNA ARRAY (nm_empresa , id) QUER É EXIBIDO NA TELA DE LOGIN
     * A ORDEM DO '->lists()' NÃO PODE SER ALTERA 
     * POIS QUANDO É CHAMANDO O METODO IRA EXIBIR O NOME E O VALUE O 'id' EM FORM:SELECT 
     */

    public function getEmpresasLogin() {

        /* SELECT NA TABELA EMRPESAS QUE IRAR LISTAR AS COLUNAS 'nm_empresa' e 'id' */
        $slcEmpresa = DB::table('empresas')->lists('nm_empresa', 'id');
        /* RETORNANDO O ARRAY DAS COLUNAS LISTADAS EM COMPACTAS NA VARIAVEL 'slcEmpresa' */
        return View::make('login')->with('slcEmpresa', $slcEmpresa);
    }
    
    
}

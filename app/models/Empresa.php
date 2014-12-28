<?php

class Empresa extends Eloquent {

    protected $tabela = 'empresas';

    public static function getEmpresas() {
        return Empresa::all();
    }
    
    public static function inativar($id){
        $empresa = Empresa::find($id);
        $empresa->idStatus = '2';
        $empresa->save();
    }
    
    public static function ativar($id){
        $empresa = Empresa::find($id);
        $empresa->idStatus = '1';
        $empresa->save();
    }

}

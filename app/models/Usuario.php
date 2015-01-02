<?php

class Usuario extends Eloquent{
    
    protected $tabela = 'usuarios';
    
    public static function getUsuarios(){
        return Usuario::all();
    }
    
    /************************************************************************************************/
    /*  Metodo de Ligação entre a tabela usuarios e empresas 
     ************************************************************************************************/
    public static function relationshipEmpresas(){
        
        return DB::table('usuarios')
            ->leftJoin('empresas', 'empresas.id', '=', 'usuarios.idEmpresa')
            ->orderBy('usuarios.nm_usuario')
            ->get(array(
                'usuarios.id', 
                'usuarios.nm_usuario', 
                'empresas.nm_empresa',
                'usuarios.idStatus'
            ));
    }
}
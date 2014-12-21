<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Usuario extends Eloquent{
    
    protected $tabela = 'usuarios';
    
    public function getUsuarios(){
        return Usuario::all();
    }
}
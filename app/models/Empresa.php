<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Empresa extends Eloquent {

    protected $tabela = 'empresas';

    public function getEmpresas() {
        return Empresa::all();
    }

}

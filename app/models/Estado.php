<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class Estado extends Eloquent {

    protected $tabela = 'estados';

    public static function getEstados() {
        return Estado::all()->lists('estado','id');
    }

}

<?php

class Acesso extends Eloquent {

    protected $tabela = 'acessos';

    public static function getAcessos() {
        return Acesso::all();
    }

}

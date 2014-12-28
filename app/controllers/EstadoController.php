<?php

class EstadoController extends BaseController {

    public static function getEstados() {
        
        return Estado::getEstados();
    }
    
    
}

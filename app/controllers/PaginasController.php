<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

class PaginasController extends BaseController{
    protected $layout = "layouts.main";

    public function index(){
        $this->layout->titulo = "Easy";
        $this->layout->pagina = "paginas.index";
    }
    
    public function equipamentos(){
        $this->layout->titulo = "Easy | Equipamentos";
        $this->layout->pagina = "paginas.cadastro.equipamentos";
    }
}
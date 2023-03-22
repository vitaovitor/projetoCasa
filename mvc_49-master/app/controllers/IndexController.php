<?php

namespace App\controllers;

use Core\controller\Action;

class IndexController extends Action
{
    
    public function index()
    {
        $this->view->dados = array("Casa", "Apartamento", "Sobrado");
        $this->render("index", "layout");
    }

    public function sobre_nos()
    {
        $this->view->dados = array("Celular", "Tablet", "Ipad");
        $this->render("sobre_nos", "layout2");
    }

    public function contato()
    {
        $this->view->dados = array("Arduino", "Node MCU", "Raspberry");
        $this->render("contato","layout");
    }

    
}



// IndexController



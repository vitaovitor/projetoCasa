<?php

namespace Core\controller;
use stdClass;
abstract class Action {
    
    protected $view;

    public function __construct()
    {   
        $this->view = new stdClass;        
    }

    protected function render($view, $layout) {
      
            $this->view->page = $view;

            //a funçao file_exists verifica se um arquivo existe dentro do
            //diretorio informado. caso exista a funçao retorna TRUE
            //caso nao exista a funaço retorna FALSE

        if(file_exists(("../app/views/layout/" . $layout.".phtml"))) {
           require_once("../app/views/layout/" . $layout.".phtml");
          
        }else{
            require_once("../app/views/layout/layout.phtml");
            // $this->content();
        }
            

          
    }


    public function content()
    {
        $classeAtual = get_class($this);
        $classeAtual = str_replace('App\\controllers\\', '', $classeAtual);

        $classeAtual = strtolower(str_replace('Controller', '', $classeAtual));

        require_once('../app/views/' . $classeAtual . '/' . $this->view->page . '.phtml');
    }
}

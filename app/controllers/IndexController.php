<?php

class IndexController extends ControllerBase
{

    public function onConstruct(){
        $this->assets->addCss('bootstrap/css/bootstrap.css');
        $this->assets->addCss('css/font-awesome.min.css');
        $this->assets->addCss('css/style.css');

        $this->assets->addJs('jquery/editProject.js');

    }
    public function indexAction()
    {

    }

}


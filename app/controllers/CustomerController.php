<?php

class CustomerController extends ControllerBase
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


    public function testformAction(){

    }
    public function formpassageAction(){
      
    }


    public function createPassAction(){




    }

    public function checkStatusAction(){
        $parameters["order"] = "CusName";
        $pass = Pass::find($parameters);
        $this->view->pass = $pass;

    }


    public function onGoingSaveAction(){
        $pass  = new Pass();
        $pass->CusName = $this->request->getPost("CusName");
        $pass->CusSir = $this->request->getPost("CusSir");
        $pass->Here = $this->request->getPost("Here");
        $pass->Going = $this->request->getPost("Going");
    
        $pass->passStatus= 0 ;

        $pass->save();

    }

    public function reviewAction(){
        
    }

}

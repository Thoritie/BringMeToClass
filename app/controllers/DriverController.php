<?php

class DriverController extends ControllerBase
{

    public function indexAction()
    {

    }

    public function acceptAction()
    {

       
        $parameters["order"] = "CusName";
        $pass = Pass::find($parameters);
        
        
        $pass = $this->modelsManager->executeQuery(
            "SELECT * FROM Pass WHERE passStatus = :st:",
            [
                "st" => "0",
            ]
        );

        $this->view->pass = $pass;
    }

    public function comeAction(){
        $parameters["order"] = "CusName";
        $pass = Pass::find($parameters);
        
        
        $pass = $this->modelsManager->executeQuery(
            "SELECT * FROM Pass WHERE passStatus = :st:",
            [
                "st" => "0",
            ]
        );

        $this->view->pass = $pass;
    }

}

